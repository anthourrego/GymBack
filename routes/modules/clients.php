<?php

use Illuminate\Support\Facades\Route;

Route::prefix('clients')->middleware('auth:sanctum')->group(function () {
    
});
