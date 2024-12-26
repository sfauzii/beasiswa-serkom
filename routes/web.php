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

Route::get('/', [ScholarshipController::class, 'home'])->name('home');
Route::get('/daftar', [ScholarshipController::class, 'daftar'])->name('daftar');
Route::get('/hasil', [ScholarshipController::class, 'hasil'])->name('hasil');
Route::get('/grafik', [ScholarshipController::class, 'grafik'])->name('grafik');
