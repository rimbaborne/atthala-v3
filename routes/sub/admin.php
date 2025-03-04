<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/admin/{unit}')->middleware('role:admin-tahsin|admin-rtq|admin-tla|admin-rq|admin-tahla')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.index');

    Route::get('/periode', [App\Http\Controllers\Admin\PeriodeController::class, 'index'])->name('admin.periode.index');
    Route::get('/periode/create', [App\Http\Controllers\Admin\PeriodeController::class, 'create'])->name('admin.periode.create');
    Route::post('/periode', [App\Http\Controllers\Admin\PeriodeController::class, 'store'])->name('admin.periode.store');
    Route::get('/periode/{periode}', [App\Http\Controllers\Admin\PeriodeController::class, 'show'])->name('admin.periode.show');
    Route::get('/periode/{periode}/edit', [App\Http\Controllers\Admin\PeriodeController::class, 'edit'])->name('admin.periode.edit');
    Route::put('/periode/{periode}', [App\Http\Controllers\Admin\PeriodeController::class, 'update'])->name('admin.periode.update');
    Route::delete('/periode/{periode}', [App\Http\Controllers\Admin\PeriodeController::class, 'destroy'])->name('admin.periode.destroy');


    Route::prefix('/periode/{periode}')->group(function () {

        Route::get('/dash', [App\Http\Controllers\Admin\PeriodeController::class, 'dashboard'])->name('admin.periode.dashboard');

        Route::get('/jadwal', [App\Http\Controllers\Admin\JadwalController::class, 'index'])->name('admin.jadwal.index');
        Route::get('/jadwal/absen', [App\Http\Controllers\Admin\JadwalController::class, 'absen'])->name('admin.jadwal.absen');
        Route::get('/jadwal/create', [App\Http\Controllers\Admin\JadwalController::class, 'create'])->name('admin.jadwal.create');
        Route::post('/jadwal', [App\Http\Controllers\Admin\JadwalController::class, 'store'])->name('admin.jadwal.store');
        Route::get('/jadwal/{jadwal}', [App\Http\Controllers\Admin\JadwalController::class, 'show'])->name('admin.jadwal.show');
        Route::get('/jadwal/{jadwal}/edit', [App\Http\Controllers\Admin\JadwalController::class, 'edit'])->name('admin.jadwal.edit');
        Route::put('/jadwal/{jadwal}', [App\Http\Controllers\Admin\JadwalController::class, 'update'])->name('admin.jadwal.update');
        Route::delete('/jadwal/{jadwal}', [App\Http\Controllers\Admin\JadwalController::class, 'destroy'])->name('admin.jadwal.destroy');

        Route::get('/peserta', [App\Http\Controllers\Admin\PesertaController::class, 'index'])->name('admin.peserta.index');
        Route::get('/peserta/kehadiran', [App\Http\Controllers\Admin\PesertaController::class, 'kehadiran'])->name('admin.peserta.kehadiran');
        Route::get('/peserta/create', [App\Http\Controllers\Admin\PesertaController::class, 'create'])->name('admin.peserta.create');
        Route::post('/peserta', [App\Http\Controllers\Admin\PesertaController::class, 'store'])->name('admin.peserta.store');
        Route::get('/peserta/{peserta}', [App\Http\Controllers\Admin\PesertaController::class, 'show'])->name('admin.peserta.show');
        Route::get('/peserta/{peserta}/edit', [App\Http\Controllers\Admin\PesertaController::class, 'edit'])->name('admin.peserta.edit');
        Route::put('/peserta/{peserta}', [App\Http\Controllers\Admin\PesertaController::class, 'update'])->name('admin.peserta.update');
        Route::delete('/peserta/{peserta}', [App\Http\Controllers\Admin\PesertaController::class, 'destroy'])->name('admin.peserta.destroy');

        Route::get('/pembayaran', [App\Http\Controllers\Admin\PembayaranController::class, 'index'])->name('admin.pembayaran.index');
        Route::get('/pembayaran/rekap', [App\Http\Controllers\Admin\PembayaranController::class, 'rekap'])->name('admin.pembayaran.rekap');
        Route::get('/pembayaran/transaksi', [App\Http\Controllers\Admin\PembayaranController::class, 'transaksi'])->name('admin.pembayaran.transaksi');
        Route::get('/pembayaran/peserta/{peserta}', [App\Http\Controllers\Admin\PembayaranController::class, 'peserta'])->name('admin.pembayaran.peserta');
        Route::get('/pembayaran/{pembayaran}', [App\Http\Controllers\Admin\PembayaranController::class, 'show'])->name('admin.pembayaran.show');
        Route::get('/pembayaran/{pembayaran}/edit', [App\Http\Controllers\Admin\PembayaranController::class, 'edit'])->name('admin.pembayaran.edit');
        Route::put('/pembayaran/{pembayaran}', [App\Http\Controllers\Admin\PembayaranController::class, 'update'])->name('admin.pembayaran.update');
        Route::delete('/pembayaran/{pembayaran}', [App\Http\Controllers\Admin\PembayaranController::class, 'destroy'])->name('admin.pembayaran.destroy');

    });



    Route::get('/transaksi', [App\Http\Controllers\Admin\TransaksiController::class, 'index'])->name('admin.transaksi.index');
    Route::get('/transaksi/create', [App\Http\Controllers\Admin\TransaksiController::class, 'create'])->name('admin.transaksi.create');
    Route::post('/transaksi', [App\Http\Controllers\Admin\TransaksiController::class, 'store'])->name('admin.transaksi.store');
    Route::get('/transaksi/{transaksi}', [App\Http\Controllers\Admin\TransaksiController::class, 'show'])->name('admin.transaksi.show');
    Route::get('/transaksi/{transaksi}/edit', [App\Http\Controllers\Admin\TransaksiController::class, 'edit'])->name('admin.transaksi.edit');
    Route::put('/transaksi/{transaksi}', [App\Http\Controllers\Admin\TransaksiController::class, 'update'])->name('admin.transaksi.update');
    Route::delete('/transaksi/{transaksi}', [App\Http\Controllers\Admin\TransaksiController::class, 'destroy'])->name('admin.transaksi.destroy');

    Route::get('/pengajar', [App\Http\Controllers\Admin\PengajarController::class, 'index'])->name('admin.pengajar.index');
    Route::get('/pengajar/create', [App\Http\Controllers\Admin\PengajarController::class, 'create'])->name('admin.pengajar.create');
    Route::post('/pengajar', [App\Http\Controllers\Admin\PengajarController::class, 'store'])->name('admin.pengajar.store');
    Route::get('/pengajar/{pengajar}', [App\Http\Controllers\Admin\PengajarController::class, 'show'])->name('admin.pengajar.show');
    Route::get('/pengajar/{pengajar}/edit', [App\Http\Controllers\Admin\PengajarController::class, 'edit'])->name('admin.pengajar.edit');
    Route::put('/pengajar/{pengajar}', [App\Http\Controllers\Admin\PengajarController::class, 'update'])->name('admin.pengajar.update');
    Route::delete('/pengajar/{pengajar}', [App\Http\Controllers\Admin\PengajarController::class, 'destroy'])->name('admin.pengajar.destroy');

    Route::get('/pengaturan', [App\Http\Controllers\Admin\PengaturanController::class, 'index'])->name('admin.pengaturan.index');
    Route::get('/pengaturan/create', [App\Http\Controllers\Admin\PengaturanController::class, 'create'])->name('admin.pengaturan.create');
    Route::post('/pengaturan', [App\Http\Controllers\Admin\PengaturanController::class, 'store'])->name('admin.pengaturan.store');
    Route::get('/pengaturan/{pengaturan}', [App\Http\Controllers\Admin\PengaturanController::class, 'show'])->name('admin.pengaturan.show');
    Route::get('/pengaturan/{pengaturan}/edit', [App\Http\Controllers\Admin\PengaturanController::class, 'edit'])->name('admin.pengaturan.edit');
    Route::put('/pengaturan/{pengaturan}', [App\Http\Controllers\Admin\PengaturanController::class, 'update'])->name('admin.pengaturan.update');
    Route::delete('/pengaturan/{pengaturan}', [App\Http\Controllers\Admin\PengaturanController::class, 'destroy'])->name('admin.pengaturan.destroy');

    Route::get('/notifikasi', [App\Http\Controllers\Admin\NotifikasiController::class, 'index'])->name('admin.notifikasi.index');
    Route::get('/notifikasi/create', [App\Http\Controllers\Admin\NotifikasiController::class, 'create'])->name('admin.notifikasi.create');
    Route::post('/notifikasi', [App\Http\Controllers\Admin\NotifikasiController::class, 'store'])->name('admin.notifikasi.store');
    Route::get('/notifikasi/{notifikasi}', [App\Http\Controllers\Admin\NotifikasiController::class, 'show'])->name('admin.notifikasi.show');
    Route::get('/notifikasi/{notifikasi}/edit', [App\Http\Controllers\Admin\NotifikasiController::class, 'edit'])->name('admin.notifikasi.edit');
    Route::put('/notifikasi/{notifikasi}', [App\Http\Controllers\Admin\NotifikasiController::class, 'update'])->name('admin.notifikasi.update');
    Route::delete('/notifikasi/{notifikasi}', [App\Http\Controllers\Admin\NotifikasiController::class, 'destroy'])->name('admin.notifikasi.destroy');

    Route::get('/user', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.user.index');
    Route::get('/user/create', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin.user.create');
    Route::post('/user', [App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin.user.store');
    Route::get('/user/{id}', [App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin.user.show');
    Route::put('/user/{id}', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin.user.update');
    Route::get('/user/{id}/password', [App\Http\Controllers\Admin\UserController::class, 'password'])->name('admin.user.password');
    Route::put('/user/{id}/password', [App\Http\Controllers\Admin\UserController::class, 'password_update'])->name('admin.user.password.update');
    Route::delete('/user/{id}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin.user.destroy');

    // Route::get('/pembayaran/', function () {
    //     return view('dashboard.admin.pembayaran');
    // })->name('dashboard.admin.pembayaran');
});
