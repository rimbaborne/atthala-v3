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

    Route::get('/periode', [PeriodeController::class, 'index'])->name('admin.periode.index');
    Route::get('/periode/create', [PeriodeController::class, 'create'])->name('admin.periode.create');
    Route::post('/periode', [PeriodeController::class, 'store'])->name('admin.periode.store');
    Route::get('/periode/{periode}', [PeriodeController::class, 'show'])->name('admin.periode.show');
    Route::get('/periode/{periode}/edit', [PeriodeController::class, 'edit'])->name('admin.periode.edit');
    Route::put('/periode/{periode}', [PeriodeController::class, 'update'])->name('admin.periode.update');
    Route::delete('/periode/{periode}', [PeriodeController::class, 'destroy'])->name('admin.periode.destroy');

    Route::get('/jadwal', [JadwalController::class, 'index'])->name('admin.jadwal.index');
    Route::get('/jadwal/create', [JadwalController::class, 'create'])->name('admin.jadwal.create');
    Route::post('/jadwal', [JadwalController::class, 'store'])->name('admin.jadwal.store');
    Route::get('/jadwal/{jadwal}', [JadwalController::class, 'show'])->name('admin.jadwal.show');
    Route::get('/jadwal/{jadwal}/edit', [JadwalController::class, 'edit'])->name('admin.jadwal.edit');
    Route::put('/jadwal/{jadwal}', [JadwalController::class, 'update'])->name('admin.jadwal.update');
    Route::delete('/jadwal/{jadwal}', [JadwalController::class, 'destroy'])->name('admin.jadwal.destroy');

    Route::get('/pengajar', [PengajarController::class, 'index'])->name('admin.pengajar.index');
    Route::get('/pengajar/create', [PengajarController::class, 'create'])->name('admin.pengajar.create');
    Route::post('/pengajar', [PengajarController::class, 'store'])->name('admin.pengajar.store');
    Route::get('/pengajar/{pengajar}', [PengajarController::class, 'show'])->name('admin.pengajar.show');
    Route::get('/pengajar/{pengajar}/edit', [PengajarController::class, 'edit'])->name('admin.pengajar.edit');
    Route::put('/pengajar/{pengajar}', [PengajarController::class, 'update'])->name('admin.pengajar.update');
    Route::delete('/pengajar/{pengajar}', [PengajarController::class, 'destroy'])->name('admin.pengajar.destroy');

    Route::get('/peserta', [PesertaController::class, 'index'])->name('admin.peserta.index');
    Route::get('/peserta/create', [PesertaController::class, 'create'])->name('admin.peserta.create');
    Route::post('/peserta', [PesertaController::class, 'store'])->name('admin.peserta.store');
    Route::get('/peserta/{peserta}', [PesertaController::class, 'show'])->name('admin.peserta.show');
    Route::get('/peserta/{peserta}/edit', [PesertaController::class, 'edit'])->name('admin.peserta.edit');
    Route::put('/peserta/{peserta}', [PesertaController::class, 'update'])->name('admin.peserta.update');
    Route::delete('/peserta/{peserta}', [PesertaController::class, 'destroy'])->name('admin.peserta.destroy');

    Route::get('/pembayaran', [PembayaranController::class, 'index'])->name('admin.pembayaran.index');
    Route::get('/pembayaran/rekap', [PembayaranController::class, 'rekap'])->name('admin.pembayaran.rekap');
    Route::get('/pembayaran/transaksi', [PembayaranController::class, 'transaksi'])->name('admin.pembayaran.transaksi');
    Route::get('/pembayaran/peserta/{peserta}', [PembayaranController::class, 'peserta'])->name('admin.pembayaran.peserta');
    Route::get('/pembayaran/{pembayaran}', [PembayaranController::class, 'show'])->name('admin.pembayaran.show');
    Route::get('/pembayaran/{pembayaran}/edit', [PembayaranController::class, 'edit'])->name('admin.pembayaran.edit');
    Route::put('/pembayaran/{pembayaran}', [PembayaranController::class, 'update'])->name('admin.pembayaran.update');
    Route::delete('/pembayaran/{pembayaran}', [PembayaranController::class, 'destroy'])->name('admin.pembayaran.destroy');

    Route::get('/transaksi', [TransaksiController::class, 'index'])->name('admin.transaksi.index');
    Route::get('/transaksi/create', [TransaksiController::class, 'create'])->name('admin.transaksi.create');
    Route::post('/transaksi', [TransaksiController::class, 'store'])->name('admin.transaksi.store');
    Route::get('/transaksi/{transaksi}', [TransaksiController::class, 'show'])->name('admin.transaksi.show');
    Route::get('/transaksi/{transaksi}/edit', [TransaksiController::class, 'edit'])->name('admin.transaksi.edit');
    Route::put('/transaksi/{transaksi}', [TransaksiController::class, 'update'])->name('admin.transaksi.update');
    Route::delete('/transaksi/{transaksi}', [TransaksiController::class, 'destroy'])->name('admin.transaksi.destroy');

    Route::get('/pengaturan', [PengaturanController::class, 'index'])->name('admin.pengaturan.index');
    Route::get('/pengaturan/create', [PengaturanController::class, 'create'])->name('admin.pengaturan.create');
    Route::post('/pengaturan', [PengaturanController::class, 'store'])->name('admin.pengaturan.store');
    Route::get('/pengaturan/{pengaturan}', [PengaturanController::class, 'show'])->name('admin.pengaturan.show');
    Route::get('/pengaturan/{pengaturan}/edit', [PengaturanController::class, 'edit'])->name('admin.pengaturan.edit');
    Route::put('/pengaturan/{pengaturan}', [PengaturanController::class, 'update'])->name('admin.pengaturan.update');
    Route::delete('/pengaturan/{pengaturan}', [PengaturanController::class, 'destroy'])->name('admin.pengaturan.destroy');

    Route::get('/notifikasi', [NotifikasiController::class, 'index'])->name('admin.notifikasi.index');
    Route::get('/notifikasi/create', [NotifikasiController::class, 'create'])->name('admin.notifikasi.create');
    Route::post('/notifikasi', [NotifikasiController::class, 'store'])->name('admin.notifikasi.store');
    Route::get('/notifikasi/{notifikasi}', [NotifikasiController::class, 'show'])->name('admin.notifikasi.show');
    Route::get('/notifikasi/{notifikasi}/edit', [NotifikasiController::class, 'edit'])->name('admin.notifikasi.edit');
    Route::put('/notifikasi/{notifikasi}', [NotifikasiController::class, 'update'])->name('admin.notifikasi.update');
    Route::delete('/notifikasi/{notifikasi}', [NotifikasiController::class, 'destroy'])->name('admin.notifikasi.destroy');

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
