<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramStudiController;
use Illuminate\Support\Facades\Route;

// Menggunakan Named Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/program-studi', [ProgramStudiController::class, 'index'])->name('prodi');
Route::get('/kontak', [HomeController::class, 'contact'])->name('kontak');
