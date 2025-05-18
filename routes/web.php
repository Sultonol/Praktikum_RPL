<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\KursiController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\PembayaranController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// ✅ Perbaikan: dashboard sekarang lewat controller
Route::get('/dashboard', [FilmController::class, 'dashboardFilms'])->middleware('auth')->name('dashboard');

Route::get('/tiket', function () {
    return view('tiket');
})->middleware('auth')->name('tiket');


Route::get('/film', [FilmController::class, 'index'])->middleware('auth')->name('film.index');
Route::get('/jadwal', [JadwalController::class, 'index'])->middleware('auth')->name('jadwal.index');
Route::get('/reservasi/{jadwal_id}', [ReservasiController::class, 'pilihKursi'])->name('reservasi');
Route::post('/reservasi/simpan', [ReservasiController::class, 'simpanReservasi'])->name('simpanReservasi');
Route::get('/pembayaran', [PembayaranController::class, 'index'])->name('pembayaran');
// Route::get('/kursi/{jadwal_id}', [KursiController::class, 'index'])->name('kursi.index');
// Route::post('/kursi/reservasi/{kursi_id}', [KursiController::class, 'reservasi'])->name('kursi.reservasi');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
