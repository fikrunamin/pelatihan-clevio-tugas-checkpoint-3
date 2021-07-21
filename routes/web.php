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

Route::get('/', [\App\Http\Controllers\Main::class, 'index'])->name('index');
Route::get('/berita', [\App\Http\Controllers\Main::class, 'berita'])->name('berita');

Route::resource('/dashboard/murid', \App\Http\Controllers\Murid::class);
Route::resource('/dashboard/guru', \App\Http\Controllers\Guru::class);
Route::resource('/dashboard/berita', \App\Http\Controllers\Berita::class);
Route::resource('/dashboard/mapel', \App\Http\Controllers\MataPelajaran::class);
Route::resource('/dashboard', \App\Http\Controllers\Dashboard::class);

