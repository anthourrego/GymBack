<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {

    Route::middleware('guest')->group(function () {
        Route::post('/login', [LoginController::class, 'store']);
        Route::post('/register', [LoginController::class, 'register']);
    });

    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/logout', [LoginController::class, 'destroy']);
    });
});
