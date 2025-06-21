<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthenticatedSessionController::class, 'storeApi']);
Route::post('/register', [AuthenticatedSessionController::class, 'registerApi']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logoutApi']);
    Route::get('/user', function () {
        return response()->json(auth()->user());
    });
});
