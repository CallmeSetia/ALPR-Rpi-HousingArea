<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('api/login', [App\Http\Controllers\AuthController::class, 'login']);

// Last route
//
//Route::prefix('api')->group(function () {
//    Route::get('login', [App\Http\Controllers\AuthController::class, 'login']);
//});


Route::get('/login/loading', function () {
    return view('view.auth.loading');
})->name('login.loading');;

Route::get('/login', function () {
    return view('view.auth.login');
})->name('login');

Route::get('/penghuni', function () {
    return view('view.penghuni.penghuni');
})->name('penghuni');


Route::prefix('penjaga')->group(function () {

    Route::get('/', function () {
        return view('view.penjaga.penjaga');
    })->name('penjaga.home');
    Route::get('/control', function () {
        return view('view.penjaga.control.control');
    })->name('penjaga.control');

    Route::get('/penghuni', function () {
        return view('view.penjaga.penghuni.penghuni');
    })->name('penjaga.penghuni');

    Route::get('/tamu', function () {
        return view('view.penjaga.tamu.tamu');
    })->name('penjaga.tamu');
});


