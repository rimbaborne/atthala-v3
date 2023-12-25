<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperAdminController;


Route::get('/', [SuperAdminController::class, 'index'])->name('superadmin.index');
Route::get('/coa', [SuperAdminController::class, 'coa'])->name('superadmin.coa.index');

Route::get('/roles', [SuperAdminController::class, 'roles'])->name('superadmin.roles.index');
Route::get('/roles/create', [SuperAdminController::class, 'roles_create'])->name('superadmin.roles.create');
Route::post('/roles/store', [SuperAdminController::class, 'roles_store'])->name('superadmin.roles.store');

// Other admin routes...
