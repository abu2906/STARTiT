<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PoinController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PekerjaController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\MessageController;

Route::get('/notifikasi', function () {
    return view('notifikasi');
});

Route::get('/awards', function() {
    return view('awards');
})->name('awards');

Route::get('/setting', function() {
    return view('setting');
})->name('setting');

Route::get('/Edit', function() {
    return view('Edit');
});

Route::get('/ulasan', function() {
    return view('ulasan');
})->name('review');

Route::get('/rating', function() {
    return view('Rating');
});

Route::get('/layanan', function() {
    return view('Layanan');
});

Route::get('/verifikasi', function() {
    return view('VerifikasiPembayaran');
});

Route::get('/set-adm', function() {
    return view('SetAdmin');
});

Route::get('/message', function() {
    return view('Message');
});

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/login-proces', [AuthController::class, 'login'])->name('login-proces');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/update-profile', [AuthController::class, 'updateProfile'])->name('update-profile');
Route::delete('/delete-account', [AuthController::class, 'deleteAccount'])->name('delete-account');

Route::get('/home', [HomeController::class, 'Home'])->name('home');
Route::get('/tambahPekerjaan', [PekerjaController::class, 'index'])->name('pekerja-tambah');
Route::post('/tambahPekerjaan-proces', [PekerjaController::class, 'store'])->name('tambah-pekerjaan');
Route::delete('/hapusPekerjaan-proces/{id}', [PekerjaController::class, 'destroy'])->name('jobs.destroy');
Route::put('/updatePekerjaan-proces/{id}', [PekerjaController::class, 'update'])->name('jobs.update');
Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile');

Route::get('/notifikasi', [NotifikasiController::class, 'notifikasi'])->name('notifikasi');
Route::get('/message', [MessageController::class, 'message'])->name('message');

Route::get('/admin/dashboard', [HomeController::class, 'AdminDashboard'])->name('admin-dashboard');
