<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('auth/login');
})->middleware('from-request')->name('login');

Route::middleware(['from-request', 'auth:sanctum', 'verified'])->group(function () {
    Route::get('home', function () {
        return Inertia::render('home/home');
    })->name('home');
});

require __DIR__.'/modules/settings.php';
require __DIR__.'/auth.php';
