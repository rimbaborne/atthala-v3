<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperAdminController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


Route::get('/', [SuperAdminController::class, 'index'])->name('superadmin.index');
Route::get('/coa', [SuperAdminController::class, 'coa'])->name('superadmin.coa.index');

Route::get('/roles', [SuperAdminController::class, 'roles_index'])->name('superadmin.roles.index');
Route::get('/roles/create', [SuperAdminController::class, 'roles_create'])->name('superadmin.roles.create');
Route::post('/roles/store', [SuperAdminController::class, 'roles_store'])->name('superadmin.roles.store');

Route::get('/users', [SuperAdminController::class, 'users_index'])->name('superadmin.users.index');
Route::get('/users/create', [SuperAdminController::class, 'users_create'])->name('superadmin.users.create');
Route::post('/users/store', [SuperAdminController::class, 'users_store'])->name('superadmin.users.store');
Route::get('/users/{id}', [SuperAdminController::class, 'users_show'])->name('superadmin.users.show');
Route::put('/users/{id}', [SuperAdminController::class, 'users_update'])->name('superadmin.users.update');
Route::get('/users/password/{id}', [SuperAdminController::class, 'users_password'])->name('superadmin.users.password');
Route::put('/users/password/{id}', [SuperAdminController::class, 'users_password_update'])->name('superadmin.users.password.update');

Route::get('/log-dml', [SuperAdminController::class, 'log_dml_index'])->name('superadmin.log-dml.index');

Route::get('/divisi', [SuperAdminController::class, 'divisi_index'])->name('superadmin.divisi.index');
Route::get('/divisi/create', [SuperAdminController::class, 'divisi_create'])->name('superadmin.divisi.create');
Route::post('/divisi/store', [SuperAdminController::class, 'divisi_store'])->name('superadmin.divisi.store');

Route::get('/unit', [SuperAdminController::class, 'unit_index'])->name('superadmin.unit.index');
Route::get('/unit/create', [SuperAdminController::class, 'unit_create'])->name('superadmin.unit.create');
Route::post('/unit/store', [SuperAdminController::class, 'unit_store'])->name('superadmin.unit.store');

Route::get('/kirim',[SuperAdminController::class,'teskirim']);

