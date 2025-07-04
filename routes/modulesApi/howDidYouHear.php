<?php

use App\Http\Controllers\Api\HowDidYouHear\HowDidYouHearController;
use Illuminate\Support\Facades\Route;

Route::prefix('how-did-you-hear')->group(function () {
    Route::get('/', [HowDidYouHearController::class, 'index']);
});
