<?php

use App\Http\Controllers\Api\TaxResponsability\TaxResponsabilityController;
use Illuminate\Support\Facades\Route;

Route::prefix('tax-responsability')->group(function () {
    Route::get('/', [TaxResponsabilityController::class, 'index']);
});