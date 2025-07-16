<?php

use App\Http\Controllers\Api\SettingsApp\SettingAppController;
use Illuminate\Support\Facades\Route;

Route::prefix('settings-app')->group(function () {
  Route::get('/', [SettingAppController::class, 'index']);
  Route::post('/', [SettingAppController::class, 'store']);
});
