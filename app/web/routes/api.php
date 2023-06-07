<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
//use App\Http\Controllers\AuthController;
//

//Route::prefix('api')->group(function () {
//
//    Route::post('login', [App\Http\Controllers\AuthController::class, 'login']);
//
//});

Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('api.login');

Route::middleware('auth:sanctum')
    ->post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])
    ->name('api.logout');

Route::middleware('auth:sanctum')->group(function () {
    Route::get('user/penjaga', [UserController::class, 'getUserPenjaga'])->name('api.user.penjaga');
    Route::get('user/penghuni', [UserController::class, 'getUserPenghuni'])->name('api.user.penghuni');
});
