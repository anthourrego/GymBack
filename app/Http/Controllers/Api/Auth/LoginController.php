<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    private UserService $userService;

    public function __construct (UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Handle an incoming authentication request for API.
     */
    public function store(LoginRequest $request): JsonResponse
    {
        try {
            $request->ensureIsNotRateLimited();

            $user = $this->userService->getByEmail($request->email);

            $result = $request->authenticateForApi($user);
            
            return response()->json([
                'success' => true,
                'message' => 'Login success',
                'data' => [
                    'user' => $result['user'],
                    'token' => $result['token'],
                    // 'token_type' => 'Bearer'
                ]
            ], 200);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid credentials',
                'errors' => $e->errors()
            ], 422);
        }
    }

    /**
     * Destroy an authenticated session for API.
     */
    public function destroy(Request $request): JsonResponse
    {
        // delete current token
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'success' => true,
            'message' => 'Logout success'
        ]);
    }

    /**
     * Destroy all sessions for API (logout from all devices).
     */
    public function destroyAll(Request $request): JsonResponse
    {
        // delete all tokens user
        $request->user()->tokens()->delete();

        return response()->json([
            'success' => true,
            'message' => 'Logout of all devices were success'
        ]);
    }

}