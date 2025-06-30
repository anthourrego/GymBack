<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{

    private UserService $userService;

    public function __construct (UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Get authenticated user for API.
     */
    public function user(Request $request): JsonResponse
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