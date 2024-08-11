<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PengajarController;
use App\Http\Controllers\Admin\PesertaController;
use App\Http\Controllers\Admin\TransaksiController;
use App\Http\Controllers\Admin\NotifikasiController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PeriodeController;
use App\Http\Controllers\Admin\JadwalController;
use App\Http\Controllers\Admin\PengaturanController;
use Illuminate\Support\Facades\Route;

Route::prefix('/admin/{unit}')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');

    Route::resource('/periode', PeriodeController::class, [
        'names' => [
            'index' => 'admin.periode.index',
            'store' => 'admin.periode.store',
            'show' => 'admin.periode.show',
            'update' => 'admin.periode.update',
            'destroy' => 'admin.periode.destroy',
        ]
    ]);

    Route::resource('/jadwal', JadwalController::class, [
        'names' => [
            'index' => 'admin.jadwal.index',
            'store' => 'admin.jadwal.store',
            'show' => 'admin.jadwal.show',
            'update' => 'admin.jadwal.update',
            'destroy' => 'admin.jadwal.destroy',
        ]
    ]);

    Route::resource('/pengajar', PengajarController::class, [
        'names' => [
            'index' => 'admin.pengajar.index',
            'store' => 'admin.pengajar.store',
            'show' => 'admin.pengajar.show',
            'update' => 'admin.pengajar.update',
            'destroy' => 'admin.pengajar.destroy',
        ]
    ]);

    Route::resource('/peserta', PesertaController::class, [
        'names' => [
            'index' => 'admin.peserta.index',
            'store' => 'admin.peserta.store',
            'show' => 'admin.peserta.show',
            'update' => 'admin.peserta.update',
            'destroy' => 'admin.peserta.destroy',
        ]
    ]);

    Route::resource('/transaksi', TransaksiController::class, [
        'names' => [
            'index' => 'admin.transaksi.index',
            'store' => 'admin.transaksi.store',
            'show' => 'admin.transaksi.show',
            'update' => 'admin.transaksi.update',
            'destroy' => 'admin.transaksi.destroy',
        ]
    ]);

    Route::resource('/pengaturan', PengaturanController::class, [
        'names' => [
            'index' => 'admin.pengaturan.index',
            'store' => 'admin.pengaturan.store',
            'show' => 'admin.pengaturan.show',
            'update' => 'admin.pengaturan.update',
            'destroy' => 'admin.pengaturan.destroy',
        ]
    ]);

    Route::resource('/notifikasi', NotifikasiController::class, [
        'names' => [
            'index' => 'admin.notifikasi.index',
            'store' => 'admin.notifikasi.store',
            'show' => 'admin.notifikasi.show',
            'update' => 'admin.notifikasi.update',
            'destroy' => 'admin.notifikasi.destroy',
        ]
    ]);

    Route::resource('/user', UserController::class, [
        'names' => [
            'index' => 'admin.user.index',
            'store' => 'admin.user.store',
            'show' => 'admin.user.show',
            'update' => 'admin.user.update',
            'password' => 'admin.user.password',
            'password_update' => 'admin.user.password.update',
            'destroy' => 'admin.user.destroy',
        ]
    ]);

    Route::get('/pembayaran/', function () {
        return view('dashboard.admin.pembayaran');
    })->name('dashboard.admin.pembayaran');
});
