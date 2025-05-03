<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\TenagaKesehatanController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\JanjiTemuController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManageJanjiTemuController;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas');
Route::get('/tentang-kami', [TentangKamiController::class, 'index'])->name('tentang-kami');
Route::get('/tenaga-kesehatan', [TenagaKesehatanController::class, 'index'])->name('tenaga-kesehatan');
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
Route::get('/janji-temu', [JanjiTemuController::class, 'index'])->name('janji-temu');
Route::post('/janji-temu', [JanjiTemuController::class, 'store'])->name('janji-temu.store');
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::post('/admin', [AdminController::class, 'login'])->name('admin.submit');
Route::get('/manage-janji-temu', [ManageJanjiTemuController::class, 'index'])->name('manage-janji-temu');
Route::get('/manage-janji-temu/{id}/edit', [ManageJanjiTemuController::class, 'edit'])->name('manage-janji-temu.edit');
Route::put('/manage-janji-temu/{id}', [ManageJanjiTemuController::class, 'update'])->name('manage-janji-temu.update');
Route::delete('/manage-janji-temu/{id}', [ManageJanjiTemuController::class, 'destroy'])->name('manage-janji-temu.destroy');
Route::post('/manage-janji-temu', [AdminController::class, 'logout'])->name('admin.logout');
