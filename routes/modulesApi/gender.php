<?php

use App\Http\Controllers\Api\Gender\GenderController;
use Illuminate\Support\Facades\Route;

Route::prefix('gender')->group(function () {
    Route::get('/', [GenderController::class, 'index']);
});
