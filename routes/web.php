<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuperAdminController;
use Illuminate\Support\Facades\Route;

Route::get('/rekam', function (){
    return view('rekam');

});

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('splade')->group(function () {
    // Registers routes to support the interactive components...
    Route::spladeWithVueBridge();

    // Registers routes to support password confirmation in Form and Link components...
    Route::spladePasswordConfirmation();

    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();

    // Route::get('/', function () {
    //     return view('welcome');
    // });

    // Route::middleware('auth.redirect')->group(function () {
    //     Route::get('/');
    // });

    Route::middleware('auth')->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/data', function(){
            return view('dashboard.peserta.data');
        }
        )->name('data');
        Route::get('/riwayat-pembayaran', function(){
            return view('dashboard.peserta.riwayat-pembayaran');
        }
        )->name('riwayat-pembayaran');


        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::group(['prefix' => 'super-admin'], function () {
            require __DIR__.'/sub/super-admin.php';
        });

        Route::group(['prefix' => 'dashboard'], function () {
            require __DIR__.'/sub/ketua-divisi.php';
            require __DIR__.'/sub/ketua-unit.php';
            require __DIR__.'/sub/admin.php';
            require __DIR__.'/sub/pengajar.php';
            require __DIR__.'/sub/penguji.php';
            require __DIR__.'/sub/peserta.php';
            require __DIR__.'/sub/kasir.php';
            require __DIR__.'/sub/keuangan.php';
            require __DIR__.'/sub/pimpinan.php';
        });
    });

    Route::get('/phpmyinfo', function () {
        phpinfo();
    })->name('phpmyinfo');

    require __DIR__.'/auth.php';

    # Routing Website Utama Non Auth
    require __DIR__.'/sub/website.php';
});
