<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {

    Route::resource('buku', BukuController::class);

    Route::get('/anggota', [AnggotaController::class, 'index'])
        ->name('anggota.index');

    Route::resource('peminjaman', PeminjamanController::class)
        ->only(['index', 'create', 'store']);

});

require __DIR__.'/auth.php';