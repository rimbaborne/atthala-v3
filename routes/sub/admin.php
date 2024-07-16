<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/periode', [AdminController::class, 'index'])->name('admin.periode.index');
    Route::post('/periode', [AdminController::class, 'store'])->name('admin.periode.store');
    Route::get('/periode/{id}', [AdminController::class, 'show'])->name('admin.periode.show');
    Route::put('/periode/{id}', [AdminController::class, 'update'])->name('admin.periode.update');
    Route::delete('/periode/{id}', [AdminController::class, 'destroy'])->name('admin.periode.destroy');

    Route::get('/jadwal', [AdminController::class, 'index'])->name('admin.jadwal.index');
    Route::post('/jadwal', [AdminController::class, 'store'])->name('admin.jadwal.store');
    Route::get('/jadwal/{id}', [AdminController::class, 'show'])->name('admin.jadwal.show');
    Route::put('/jadwal/{id}', [AdminController::class, 'update'])->name('admin.jadwal.update');
    Route::delete('/jadwal/{id}', [AdminController::class, 'destroy'])->name('admin.jadwal.destroy');

    Route::get('/pengajar', [AdminController::class, 'index'])->name('admin.pengajar.index');
    Route::post('/pengajar', [AdminController::class, 'store'])->name('admin.pengajar.store');
    Route::get('/pengajar/{id}', [AdminController::class, 'show'])->name('admin.pengajar.show');
    Route::put('/pengajar/{id}', [AdminController::class, 'update'])->name('admin.pengajar.update');
    Route::delete('/pengajar/{id}', [AdminController::class, 'destroy'])->name('admin.pengajar.destroy');

    Route::get('/peserta', [AdminController::class, 'index'])->name('admin.peserta.index');
    Route::post('/peserta', [AdminController::class, 'store'])->name('admin.peserta.store');
    Route::get('/peserta/{id}', [AdminController::class, 'show'])->name('admin.peserta.show');
    Route::put('/peserta/{id}', [AdminController::class, 'update'])->name('admin.peserta.update');
    Route::delete('/peserta/{id}', [AdminController::class, 'destroy'])->name('admin.peserta.destroy');

    Route::get('/transaksi', [AdminController::class, 'index'])->name('admin.transaksi.index');
    Route::post('/transaksi', [AdminController::class, 'store'])->name('admin.transaksi.store');
    Route::get('/transaksi/{id}', [AdminController::class, 'show'])->name('admin.transaksi.show');
    Route::put('/transaksi/{id}', [AdminController::class, 'update'])->name('admin.transaksi.update');
    Route::delete('/transaksi/{id}', [AdminController::class, 'destroy'])->name('admin.transaksi.destroy');

    Route::get('/pengaturan', [AdminController::class, 'index'])->name('admin.pengaturan.index');
    Route::post('/pengaturan', [AdminController::class, 'store'])->name('admin.pengaturan.store');
    Route::get('/pengaturan/{id}', [AdminController::class, 'show'])->name('admin.pengaturan.show');
    Route::put('/pengaturan/{id}', [AdminController::class, 'update'])->name('admin.pengaturan.update');
    Route::delete('/pengaturan/{id}', [AdminController::class, 'destroy'])->name('admin.pengaturan.destroy');

    Route::get('/notifikasi', [AdminController::class, 'index'])->name('admin.notifikasi.index');
    Route::post('/notifikasi', [AdminController::class, 'store'])->name('admin.notifikasi.store');
    Route::get('/notifikasi/{id}', [AdminController::class, 'show'])->name('admin.notifikasi.show');
    Route::put('/notifikasi/{id}', [AdminController::class, 'update'])->name('admin.notifikasi.update');
    Route::delete('/notifikasi/{id}', [AdminController::class, 'destroy'])->name('admin.notifikasi.destroy');

    Route::get('/user', [AdminController::class, 'index'])->name('admin.user.index');
    Route::post('/user', [AdminController::class, 'store'])->name('admin.user.store');
    Route::get('/user/{id}', [AdminController::class, 'show'])->name('admin.user.show');
    Route::put('/user/{id}', [AdminController::class, 'update'])->name('admin.user.update');
    Route::delete('/user/{id}', [AdminController::class, 'destroy'])->name('admin.user.destroy');
});
