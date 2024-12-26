<?php

use App\Http\Controllers\ScholarshipController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route untuk halaman home
Route::get('/', [ScholarshipController::class, 'home'])->name('home');

// Route untuk halaman daftar beasiswa
Route::get('/daftar', [ScholarshipController::class, 'daftar'])->name('daftar');

// Route untuk halaman hasil pendaftaran beasiswa
Route::get('/hasil', [ScholarshipController::class, 'hasil'])->name('hasil');

// Route untuk halaman grafik beasiswa
Route::get('/grafik', [ScholarshipController::class, 'grafik'])->name('grafik');