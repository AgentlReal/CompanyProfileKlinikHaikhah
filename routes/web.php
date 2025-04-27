<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FasilitasController;
Route::get('/', [HomeController::class, 'index'])->name('index'); // Halaman home
Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas');// halaman fasilitas


