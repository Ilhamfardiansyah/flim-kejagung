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

Route::get('/form_list', [App\Http\Controllers\HomeController::class, 'form_list'])->name('form_list');

Route::get('/regist', [App\Http\Controllers\HomeController::class, 'regist'])->name('regist');

Route::get('/coc', [App\Http\Controllers\HomeController::class, 'coc'])->name('coc');




