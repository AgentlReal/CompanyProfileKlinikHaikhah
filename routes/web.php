<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\TenagaKesehatanController;
use App\Http\Controllers\TentangKamiController;

Route::get('/', [HomeController::class, 'index'])->name('index'); // Halaman home
Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas'); // halaman fasilitas
Route::get('/tentang-kami', [TentangKamiController::class, 'index'])->name('tentang-kami');
Route::get('/tenaga-kesehatan', [TenagaKesehatanController::class, 'index'])->name('tenaga-kesehatan');
