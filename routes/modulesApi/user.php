<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\User\UserController;
use Illuminate\Support\Facades\Route;


Route::prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'user']);
});
