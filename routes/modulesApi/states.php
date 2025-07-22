<?php

use App\Http\Controllers\Api\State\StateController;
use Illuminate\Support\Facades\Route;

Route::prefix('states')->group(function () {
    Route::get('/', [StateController::class, 'index']);
});
