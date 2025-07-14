<?php

use App\Http\Controllers\MembershipController;
use Illuminate\Support\Facades\Route;

Route::prefix('membership')->group(function () {
  Route::post('/', [MembershipController::class, 'store']);
});
