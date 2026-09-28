<?php

use App\Http\Controllers\AktivitasController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DataDiriController;
use App\Http\Controllers\HaloController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BerandaController::class, 'index']);
Route::get('/beranda', [BerandaController::class, 'index']);
Route::get('/data-diri', [DataDiriController::class, 'index']);
Route::get('/aktivitas', [AktivitasController::class, 'index']);
Route::get('/kontak', [KontakController::class, 'index']);
Route::get('/halo', [HaloController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
