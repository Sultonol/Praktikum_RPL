<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FilmController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// ✅ Perbaikan: dashboard sekarang lewat controller
Route::get('/dashboard', [FilmController::class, 'dashboardFilms'])->middleware('auth')->name('dashboard');

Route::get('/jadwal', function () {
    return view('jadwal');
})->middleware('auth')->name('jadwal');

Route::get('/tiket', function () {
    return view('tiket');
})->middleware('auth')->name('tiket');

// ✅ Route untuk menampilkan semua film
Route::get('/film', [FilmController::class, 'index'])->middleware('auth')->name('film.index');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
