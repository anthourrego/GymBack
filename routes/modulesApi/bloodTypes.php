<?php

use App\Http\Controllers\Api\BloodType\BloodTypeController;
use Illuminate\Support\Facades\Route;

Route::prefix('blood-types')->group(function () {
    Route::get('/', [BloodTypeController::class, 'index']);
});
