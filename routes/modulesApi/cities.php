<?php

use App\Http\Controllers\Api\City\CityController;
use Illuminate\Support\Facades\Route;

Route::prefix('cities')->group(function () {
    Route::get('/', [CityController::class, 'index']);
});
