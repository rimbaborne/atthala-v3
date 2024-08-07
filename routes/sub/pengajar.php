<?php

use Illuminate\Support\Facades\Route;

Route::get('/pengajar/{unit}', function () {
    return view('dashboard.pengajar.index');
})->name('dashboard.pengajar.index');
