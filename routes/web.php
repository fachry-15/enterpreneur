<?php

use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});

Auth::routes();

// Route
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pendaftar', [App\Http\Controllers\HomeController::class, 'pendaftar'])->name('pendaftar');
Route::get('/hasil', [App\Http\Controllers\HomeController::class, 'hasil'])->name('hasil');
Route::get('/bobot', [App\Http\Controllers\HomeController::class, 'bobot'])->name('bobot');
Route::get('/matriks', [App\Http\Controllers\HomeController::class, 'matriks'])->name('matriks');
Route::get('/prefensi', [App\Http\Controllers\HomeController::class, 'prefensi'])->name('prefensi');
Route::get('/ranking', [App\Http\Controllers\HomeController::class, 'ranking'])->name('ranking');
Route::get('/TambahProdi', [App\Http\Controllers\HomeController::class, 'prodi'])->name('TambahProdi');

Route::post('/TmbPrd', [App\Http\Controllers\systemcontroller::class, 'store'])->name('prosestambah');
