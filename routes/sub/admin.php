<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PengajarController;
use App\Http\Controllers\Admin\PesertaController;
use App\Http\Controllers\Admin\TransaksiController;
use App\Http\Controllers\Admin\PembayaranController;
use App\Http\Controllers\Admin\NotifikasiController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PeriodeController;
use App\Http\Controllers\Admin\JadwalController;
use App\Http\Controllers\Admin\PengaturanController;
use Illuminate\Support\Facades\Route;

Route::prefix('/admin/{unit}')->middleware('role:admin-tahsin|admin-rtq|admin-tla|admin-rq|admin-tahla')->group(function () {
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

    Route::resource('/pembayaran', PembayaranController::class, [
        'names' => [
            'index' => 'admin.pembayaran.index',
            'store' => 'admin.pembayaran.store',
            'show' => 'admin.pembayaran.show',
            'update' => 'admin.pembayaran.update',
            'destroy' => 'admin.pembayaran.destroy',
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

    Route::get('/user', [UserController::class, 'index'])->name('admin.user.index');
    Route::get('/user/create', [UserController::class, 'create'])->name('admin.user.create');
    Route::post('/user', [UserController::class, 'store'])->name('admin.user.store');
    Route::get('/user/{id}', [UserController::class, 'show'])->name('admin.user.show');
    Route::put('/user/{id}', [UserController::class, 'update'])->name('admin.user.update');
    Route::get('/user/{id}/password', [UserController::class, 'password'])->name('admin.user.password');
    Route::put('/user/{id}/password', [UserController::class, 'password_update'])->name('admin.user.password.update');
    Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('admin.user.destroy');

    // Route::get('/pembayaran/', function () {
    //     return view('dashboard.admin.pembayaran');
    // })->name('dashboard.admin.pembayaran');
});
