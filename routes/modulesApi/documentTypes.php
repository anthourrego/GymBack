<?php

use App\Http\Controllers\Api\DocumentType\DocumentTypeController;
use Illuminate\Support\Facades\Route;

Route::prefix('document-types')->group(function () {
    Route::get('/', [DocumentTypeController::class, 'index']);
});
