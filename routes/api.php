<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

require __DIR__.'/modulesApi/auth.php';

Route::middleware('auth:sanctum')->group(function () {
    require __DIR__.'/modulesApi/clients.php';
    require __DIR__.'/modulesApi/membership.php';
    require __DIR__.'/modulesApi/user.php';
});
