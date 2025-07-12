<?php

use App\Http\Controllers\Api\Country\CountryController;
use Illuminate\Support\Facades\Route;

Route::prefix('countries')->group(function () {
    Route::get('/', [CountryController::class, 'index']);
});
