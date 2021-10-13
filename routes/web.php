<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BukuController;

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

Route::get('/koleksi', [BukuController::class, 'index'])->name('koleksi');
Route::get('/koleksi/create',[BukuController::class, 'create'])->name('koleksi.create');
Route::post('/koleksi/store',[BukuController::class, 'store'])->name('koleksi.store');
Route::get('/koleksi/{koleksi}',[BukuController::class, 'show'])->name('koleksi.show');
