<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BukuController;
use App\Http\Controllers\Controller;

// Route
Route::get('/koleksi', [BukuController::class, 'index'])->name('koleksi');
Route::get('/koleksi/{koleksi}',[BukuController::class, 'show'])->name('koleksi.show');

// route fix
Route::get('/', [Controller::class, 'home'])->name('home');
Route::get('/buku/index',[BukuController::class, 'index'])->name('buku.index');
Route::get('/buku/{buku}',[BukuController::class, 'show'])->name('buku.show');
Route::get('/buku/create',[BukuController::class, 'create'])->name('buku.create');
Route::post('/buku/store',[BukuController::class, 'store'])->name('buku.store');
