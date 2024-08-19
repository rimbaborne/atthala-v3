<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/daftar-program', function () {
    return view('dashboard.peserta.daftar-program');
})->name('daftar-program');

Route::get('/daftar-program/tla', function () {
    return view('dashboard.peserta.daftar-program-tla');
})->name('daftar-program.tla');

Route::get('/daftar-program/tla/invoice', function () {
    return view('dashboard.peserta.daftar-program-tla-invoice');
})->name('daftar-program.tla.invoice');


Route::prefix('/peserta')->group(function () {

    Route::get('/{uuid}', [DashboardController::class, 'peserta'])->name('dashboard.peserta');

});

Route::get('/data', [DashboardController::class, 'peserta_data'])->name('dashboard.peserta.data');
Route::get('/riwayat-pembayaran', [DashboardController::class, 'peserta_riwayat_pembayaran'])->name('dashboard.peserta.riwayatpembayaran');
