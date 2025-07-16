<?php



use App\Http\Controllers\Api\Membership\MembershipController;
use Illuminate\Support\Facades\Route;

Route::prefix('membership')->group(function () {
  Route::get('/', [MembershipController::class, 'index']);
  Route::post('/', [MembershipController::class, 'store']);
});
