<?php

use App\Http\Controllers\Api\PersonType\PersonTypeController;
use Illuminate\Support\Facades\Route;

Route::prefix('person-types')->group(function () {
    Route::get('/', [PersonTypeController::class, 'index']);
});
