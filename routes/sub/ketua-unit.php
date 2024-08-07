<?php

use Illuminate\Support\Facades\Route;

Route::get('/ketua/{unit}', function () {
    return view('dashboard.ketua-unit.index');
})->name('dashboard.ketua-unit.index');
