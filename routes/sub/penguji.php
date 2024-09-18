<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Penguji\PesertaController as PengujiPesertaController;
use App\Http\Controllers\Penguji\PesertaBaruController as PengujiPesertaBaruController;
use App\Http\Controllers\Penguji\DashboardController as PengujiDashboardController;
use App\Http\Controllers\Penguji\JadwalController as PengujiJadwalController;

Route::prefix('/penguji/{unit}')->middleware('role:penguji-tahsin|penguji-rtq|penguji-tla|penguji-rq|penguji-tahla')->group(function () {

    Route::get('/peserta', [PengujiPesertaController::class, 'index'])->name('penguji.peserta.index');
    Route::get('/peserta/create', [PengujiPesertaController::class, 'create'])->name('penguji.peserta.create');
    Route::post('/peserta', [PengujiPesertaController::class, 'store'])->name('penguji.peserta.store');
    Route::get('/peserta/{id}', [PengujiPesertaController::class, 'show'])->name('penguji.peserta.show');
    Route::get('/peserta/{id}/edit', [PengujiPesertaController::class, 'edit'])->name('penguji.peserta.edit');
    Route::put('/peserta/{id}', [PengujiPesertaController::class, 'update'])->name('penguji.peserta.update');
    Route::delete('/peserta/{id}', [PengujiPesertaController::class, 'destroy'])->name('penguji.peserta.destroy');

    Route::get('/peserta-baru', [PengujiPesertaBaruController::class, 'index'])->name('penguji.peserta-baru.index');
    Route::get('/peserta-baru/{id}', [PengujiPesertaBaruController::class, 'show'])->name('penguji.peserta-baru.show');
    Route::get('/peserta-baru/{id}/edit', [PengujiPesertaBaruController::class, 'edit'])->name('penguji.peserta-baru.edit');
    Route::put('/peserta-baru/{id}', [PengujiPesertaBaruController::class, 'update'])->name('penguji.peserta-baru.update');
    Route::delete('/peserta-baru/{id}', [PengujiPesertaBaruController::class, 'destroy'])->name('penguji.peserta-baru.destroy');

    Route::get('/', [PengujiDashboardController::class, 'index'])->name('penguji.dashboard.index');
    Route::get('/jadwal', [PengujiJadwalController::class, 'index'])->name('penguji.jadwal.index');
});
