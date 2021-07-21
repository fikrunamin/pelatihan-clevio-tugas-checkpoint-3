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
Route::get('/berita/populer', [\App\Http\Controllers\Main::class, 'berita_populer'])->name('berita.populer');
Route::get('/berita/all', [\App\Http\Controllers\Main::class, 'berita_all'])->name('berita.all');
Route::get('/berita/{slug}', [\App\Http\Controllers\Main::class, 'berita_show'])->name('berita.show');

Route::get('/mapel', [\App\Http\Controllers\Main::class, 'mapel'])->name('mapel');
Route::get('/mapel/{slug}', [\App\Http\Controllers\Main::class, 'mapel_show'])->name('mapel.show');

Route::resource('/dashboard/murid', \App\Http\Controllers\Murid::class);
Route::resource('/dashboard/guru', \App\Http\Controllers\Guru::class);
Route::resource('/dashboard/berita', \App\Http\Controllers\Berita::class)->except(['show']);
Route::resource('/dashboard/mapel', \App\Http\Controllers\MataPelajaran::class)->except(['show']);
Route::resource('/dashboard', \App\Http\Controllers\Dashboard::class);

