<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/form_regis', [App\Http\Controllers\HomeController::class, 'form_regis'])->name('form_regis');

Route::get('/regist', [App\Http\Controllers\HomeController::class, 'regist'])->name('regist');

Route::get('/form_list', [App\Http\Controllers\HomeController::class, 'form_list'])->name('form_list');

Route::get('/coc', [App\Http\Controllers\HomeController::class, 'coc'])->name('coc');

Route::get('/print', [App\Http\Controllers\HomeController::class, 'print'])->name('print');

Route::get('/detail_regist', [App\Http\Controllers\HomeController::class, 'detail'])->name('detail');

Route::get('/daftar_namakasus', [App\Http\Controllers\HomeController::class, 'daftar_kasus'])->name('daftar_kasus');

Route::get('edit', [App\Http\Controllers\HomeController::class, 'edit_regist'])->name('edit_regist');

Route::get('detail_list', [App\Http\Controllers\HomeController::class, 'detail_list'])->name('detail_list');

Route::get('search', [App\Http\Controllers\HomeController::class, 'search'])->name('search');

Route::get('/tambah', [App\Http\Controllers\HomeController::class, 'tambah'])->name('tambah');

Route::get('/detail_listcase', [App\Http\Controllers\HomeController::class, 'detail_listcase'])->name('detail_listcase');

Route::get('/detail_coc', [App\Http\Controllers\HomeController::class, 'detail_coc'])->name('detail_coc');

Route::get('/edit_listcase', [App\Http\Controllers\HomeController::class, 'edit_listcase'])->name('edit_listcase');

Route::get('/print_coc', [App\Http\Controllers\HomeController::class, 'print_coc'])->name('print_coc');

Route::get('/ba_akuisisi', [App\Http\Controllers\HomeController::class, 'ba_akuisisi'])->name('ba_akuisisi');







