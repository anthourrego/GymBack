<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

require __DIR__.'/modulesApi/auth.php';
require __DIR__.'/modulesApi/documentTypes.php';
require __DIR__.'/modulesApi/external.php';
require __DIR__.'/modulesApi/howDidYouHear.php';

Route::middleware('auth:sanctum')->group(function () {
    require __DIR__.'/modulesApi/bloodTypes.php';
    require __DIR__.'/modulesApi/cities.php';
    require __DIR__.'/modulesApi/clients.php';
    require __DIR__.'/modulesApi/countries.php';
    require __DIR__.'/modulesApi/gender.php';
    require __DIR__.'/modulesApi/membership.php';
    require __DIR__.'/modulesApi/personTypes.php';
    require __DIR__.'/modulesApi/states.php';
    require __DIR__.'/modulesApi/taxResponsability.php';
    require __DIR__.'/modulesApi/user.php';
    require __DIR__.'/modulesApi/settingsApp.php';
    
});
