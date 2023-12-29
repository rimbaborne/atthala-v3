<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperAdminController;


Route::get('/', [SuperAdminController::class, 'index'])->name('superadmin.index');
Route::get('/coa', [SuperAdminController::class, 'coa'])->name('superadmin.coa.index');

Route::get('/roles', [SuperAdminController::class, 'roles'])->name('superadmin.roles.index');
Route::get('/roles/create', [SuperAdminController::class, 'roles_create'])->name('superadmin.roles.create');
Route::post('/roles/store', [SuperAdminController::class, 'roles_store'])->name('superadmin.roles.store');

Route::get('/users', [SuperAdminController::class, 'users'])->name('superadmin.users.index');
Route::get('/users/create', [SuperAdminController::class, 'users_create'])->name('superadmin.users.create');
Route::post('/users/store', [SuperAdminController::class, 'users_store'])->name('superadmin.users.store');

Route::get('/log-dml', [SuperAdminController::class, 'log_dml'])->name('superadmin.log-dml');

Route::get('/divisi', [SuperAdminController::class, 'divisi'])->name('superadmin.divisi');

