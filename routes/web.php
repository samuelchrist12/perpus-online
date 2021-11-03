<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BukuController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MateriController;

Route::get('/materi/create', [MateriController::class, 'create'])->name('materi.create');
Route::post('/materi/store', [MateriController::class, 'store'])->name('materi.store');

// route fix

// route umum
Route::get('/', [Controller::class, 'home'])->name('home');

// route buku
Route::get('/buku/index',[BukuController::class, 'index'])->name('buku.index');
Route::get('/buku/{buku}',[BukuController::class, 'show'])->name('buku.show');
Route::get('/buku/create',[BukuController::class, 'create'])->name('buku.create');
Route::post('/buku/store',[BukuController::class, 'store'])->name('buku.store');
