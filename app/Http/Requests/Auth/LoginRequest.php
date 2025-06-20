<?php

namespace App\Http\Requests\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ];
    }

    /**
     * Get custom messages for validator errors.
     */
    public function messages(): array
    {
        return [
            'email.required' => 'El email es obligatorio.',
            'email.email' => 'El email debe tener un formato válido.',
            'password.required' => 'La contraseña es obligatoria.',
        ];
    }

    /**
     * Attempt to authenticate the request's credentials for web.
     * Used for Inertia/web authentication with sessions.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate(): void
    {
        $this->ensureIsNotRateLimited();

        if (! Auth::attempt($this->only('email', 'password'), $this->boolean('remember'))) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        RateLimiter::clear($this->throttleKey());
    }

    /**
     * Attempt to authenticate the request's credentials for API.
     * Used for Sanctum token authentication (mobile/API).
     *
     * @return array
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticateForApi(User $user): array
    {
        $this->ensureIsNotRateLimited();

        if (!$user || !Hash::check($this->password, $user->password)) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        RateLimiter::clear($this->throttleKey());

        // Create Token for api
        $token = $user->createToken($this->getTokenName())->plainTextToken;

        return [
            'user' => $user,
            'token' => $token
        ];
    }

    /**
     * Get the token name for API authentication.
     */
    protected function getTokenName(): string
    {
        $deviceName = $this->header('User-Agent', 'unknown-device');
        
        if ($this->wantsJson() || $this->expectsJson()) {
            return 'mobile-app-' . Str::limit($deviceName, 20, '');
        }

        return 'api-token';
    }

    /**
     * Determine if this is an API request.
     */
    public function isApiRequest(): bool
    {
        return $this->is('api/*') || 
               $this->wantsJson() || 
               $this->expectsJson() ||
               $this->header('Accept') === 'application/json';
    }

    /**
     * Ensure the login request is not rate limited.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), $this->maxAttempts())) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => __('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the maximum number of attempts allowed.
     */
    protected function maxAttempts(): int
    {
        return $this->isApiRequest() ? 3 : 5;
    }

    /**
     * Get the rate limiting throttle key for the request.
     */
    public function throttleKey(): string
    {
        $prefix = $this->isApiRequest() ? 'api-login' : 'web-login';
        
        return Str::transliterate(
            $prefix . '|' . Str::lower($this->string('email')) . '|' . $this->ip()
        );
    }

    /**
     * Get the validated credentials.
     */
    public function getCredentials(): array
    {
        return $this->only('email', 'password');
    }

    /**
     * Clear rate limiting for successful login.
     */
    public function clearRateLimit(): void
    {
        RateLimiter::clear($this->throttleKey());
    }
}