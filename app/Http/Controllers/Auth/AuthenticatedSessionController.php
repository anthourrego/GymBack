<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view for web.
     */
    public function create(): Response
    {
        return Inertia::render('auth/login', [
            'canResetPassword' => route('password.request'),
            'status' => session('status'),
        ]);
    }

    /**
     * Handle an incoming authentication request for web.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route('dashboard'));
    }

    /**
     * Handle an incoming authentication request for API.
     */
    public function storeApi(LoginRequest $request): JsonResponse
    {
        try {
            $result = $request->authenticateForApi();
            
            return response()->json([
                'success' => true,
                'message' => 'Login exitoso',
                'data' => [
                    'user' => $result['user'],
                    'token' => $result['token'],
                    'token_type' => 'Bearer'
                ]
            ], 200);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Credenciales incorrectas',
                'errors' => $e->errors()
            ], 422);
        }
    }

    /**
     * Destroy an authenticated session for web.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    /**
     * Destroy an authenticated session for API.
     */
    public function destroyApi(Request $request): JsonResponse
    {
        // Eliminar el token actual
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'success' => true,
            'message' => 'Logout exitoso'
        ]);
    }

    /**
     * Destroy all sessions for API (logout from all devices).
     */
    public function destroyAllApi(Request $request): JsonResponse
    {
        // Eliminar todos los tokens del usuario
        $request->user()->tokens()->delete();

        return response()->json([
            'success' => true,
            'message' => 'Logout de todos los dispositivos exitoso'
        ]);
    }

    /**
     * Get authenticated user for API.
     */
    public function userApi(Request $request): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => [
                'user' => $request->user(),
                'current_token' => $request->user()->currentAccessToken()
            ]
        ]);
    }
}