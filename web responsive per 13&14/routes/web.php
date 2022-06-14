<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function (){
    Route::get('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');

    Route::post('/login', [\App\Http\Controllers\AuthController::class, 'authenticate']);
});

Route::middleware('auth')->group( function (){
    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('/dosen', [\App\Http\Controllers\DosenController::class, 'index'])->name('dosen');

    Route::get('/mahasiswa', function () {
        return view('mahasiswa');
    })->name('mahasiswa');

    Route::get('/skripsi', function () {
        return view('skripsi');
    })->name('skripsi');

    Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
});




