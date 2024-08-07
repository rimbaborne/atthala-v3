<?php

use Illuminate\Support\Facades\Route;

Route::get('/daftar-program', function () {
    return view('dashboard.peserta.daftar-program');
})->name('daftar-program');

Route::get('/daftar-program/tla', function () {
    return view('dashboard.peserta.daftar-program-tla');
})->name('daftar-program.tla');

Route::get('/daftar-program/tla/invoice', function () {
    return view('dashboard.peserta.daftar-program-tla-invoice');
})->name('daftar-program.tla.invoice');

