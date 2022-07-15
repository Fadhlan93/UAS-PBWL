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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/penduduk', App\Http\Controllers\PendudukController::class);
Route::resource('/kelahiran', App\Http\Controllers\KelahiranController::class);
Route::resource('/kematian', App\Http\Controllers\KematianController::class);
Route::resource('/keluarga', App\Http\Controllers\KeluargaController::class);
Route::resource('/wilayah', App\Http\Controllers\WilayahController::class);
