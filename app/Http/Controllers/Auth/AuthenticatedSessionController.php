<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;

class AuthenticatedSessionController extends Controller
{

    private UserService $userService;

    public function __construct (UserService $userService)
    {
        $this->userService = $userService;
    }

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

        return redirect()->intended(route('home'));
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

}