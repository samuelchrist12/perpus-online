<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BukuController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MateriController;

// route fix

// route umum
Route::get('/', [Controller::class, 'home'])->name('home');

// route buku
Route::resource('buku', BukuController::class);

// route materi
Route::resource('materi', MateriController::class);
