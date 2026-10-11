<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramStudiController;
use App\Http\Controllers\MataKuliahController;
use Illuminate\Support\Facades\Route;

// Menggunakan Named Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/program-studi', [ProgramStudiController::class, 'index'])->name('prodi');
Route::get('/kontak', [HomeController::class, 'contact'])->name('kontak');
Route::get('/form-pendaftaran', function () {
    return view('pendaftaran-kegiatan');
});

// CRUD Mata Kuliah dengan Group Prefix Admin (Tugas 3)
Route::prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::resource('mata-kuliah', MataKuliahController::class);
    });
