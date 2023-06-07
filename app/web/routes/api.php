<?php
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


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\PenghuniController;
use App\Http\Controllers\PenjagaController;
use App\Http\Controllers\PlatNomorController;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\ControlController;


Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('api.login');

Route::middleware('auth:sanctum')
    ->post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])
    ->name('api.logout');

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('tamu', TamuController::class)->names([
        'index' => 'api.tamu.index',
        'show' => 'api.tamu.show',
        'store' => 'api.tamu.store',
        'update' => 'api.tamu.update',
        'destroy' => 'api.tamu.destroy',
    ]);

    Route::apiResource('plat', PlatNomorController::class)->names([
        'index' => 'api.plat.index',
        'show' => 'api.plat.show',
        'store' => 'api.plat.store',
        'update' => 'api.plat.update',
        'destroy' => 'api.plat.destroy',
    ]);

    Route::apiResource('penjaga', PenjagaController::class)->names([
        'index' => 'api.penjaga.index',
        'show' => 'api.penjaga.show',
        'store' => 'api.penjaga.store',
        'update' => 'api.penjaga.update',
        'destroy' => 'api.penjaga.destroy',
    ]);

    Route::apiResource('penghuni', PenghuniController::class)->names([
        'index' => 'api.penghuni.index',
        'show' => 'api.penghuni.show',
        'store' => 'api.penghuni.store',
        'update' => 'api.penghuni.update',
        'destroy' => 'api.penghuni.destroy',
    ]);

    Route::apiResource('sensor', SensorController::class)->names([
        'index' => 'api.sensor.index',
        'show' => 'api.sensor.show',
        'store' => 'api.sensor.store',
        'update' => 'api.sensor.update',
        'destroy' => 'api.sensor.destroy',
    ]);

    Route::apiResource('control', ControlController::class)->names([
        'index' => 'api.control.index',
        'show' => 'api.control.show',
        'store' => 'api.control.store',
        'update' => 'api.control.update',
        'destroy' => 'api.control.destroy',
    ]);

});

//Route::middleware('auth:sanctum')->group(function () {
//    Route::get('user/penjaga', [UserController::class, 'getUserPenjaga'])->name('api.user.penjaga');
//    Route::get('user/penghuni', [UserController::class, 'getUserPenghuni'])->name('api.user.penghuni');
//    Route::get('user/tamu', [UserController::class, 'getUserTamu'])->name('api.user.tamu');
//    Route::get('user/plat', [UserController::class, 'getUserPlat'])->name('api.user.plat_nomor');
//});
