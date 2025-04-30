<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\TenagaKesehatanController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\JanjiTemuController;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas');
Route::get('/tentang-kami', [TentangKamiController::class, 'index'])->name('tentang-kami');
Route::get('/tenaga-kesehatan', [TenagaKesehatanController::class, 'index'])->name('tenaga-kesehatan');
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
Route::get('/janji-temu', [JanjiTemuController::class, 'index'])->name('janji-temu');
