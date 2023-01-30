<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SinhVienController;
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
Route::get('/', [App\Http\Controllers\SinhVienController::class, 'index'])->name('home');
Route::get('/create', [App\Http\Controllers\SinhVienController::class, 'create'])->name('create');
Route::post('/store', [App\Http\Controllers\SinhVienController::class, 'store'])->name('store');
Route::get('/edit/{id}', [App\Http\Controllers\SinhVienController::class, 'edit'])->name('edit');
Route::delete('/del/{id}', [App\Http\Controllers\SinhVienController::class, 'destroy'])->name('del');
Route::put('/update/{id}', [App\Http\Controllers\SinhVienController::class, 'update'])->name('update');

