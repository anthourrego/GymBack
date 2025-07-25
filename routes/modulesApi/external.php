<?php

use App\Http\Controllers\Api\Clients\ClientController;
use Illuminate\Support\Facades\Route;

Route::prefix('clients')->group(function () {
    Route::post('/external', [ClientController::class, 'storeExternal']);
});
