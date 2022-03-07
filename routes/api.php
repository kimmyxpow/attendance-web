<?php

use App\Http\Controllers\Api\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('auth')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])
        ->middleware('auth:sanctum');

    // Route::post('/password/reset', [PasswordController::class, 'reset'])
    //     ->middleware('auth:sanctum');
    // Route::post('/password/forgot', [PasswordController::class, 'sendResetLinkEmail']);
});

// Route::group(['middleware' => 'auth:sanctum'], function () {
//     Route::post('attendance', [Api\AttendanceController::class, 'store']);
//     Route::get('attendance/history', [Api\AttendanceController::class, 'history']);
// });