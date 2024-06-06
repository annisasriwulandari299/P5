<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LokasiController;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route crud
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('lokasi', LokasiController::class);
    Route::resource('kategori', KategoriController::class);
    Route::resource('destinasi', DestinasiController::class);
});

// Route Guest(Tamu/Pengunjung)
Route::get('/', [FrontController::class, 'Destinasi']);
Route::get('destinasi/{id}', [FrontController::class, 'preview']);


