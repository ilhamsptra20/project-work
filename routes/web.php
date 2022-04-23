<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\DosenController;

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

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth:admin')->name('admin');
Route::get('/mahasiswa', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth:mahasiswa')->name('mahasiswa');
Route::get('/dosen', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth:dosen')->name('dosen');

// Route UPI //

Route::resource('data_mahasiswa', MahasiswaController::class);
Route::resource('dosen', DosenController::class);
Route::resource('registrasi', RegistrasiController::class);
Route::get('registrasi/hapus/{id}', [RegistrasiController::class,'destroy']);
Route::get('dosen/hapus/{nip}', [DosenController::class,'destroy']);

//END Route UPI//