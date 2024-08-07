<?php

use Illuminate\Support\Facades\Route;

Route::get('/penguji/{unit}', function () {
    return view('dashboard.penguji.index');
})->name('dashboard.penguji.index');
