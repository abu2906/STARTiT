<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\poinController;
use App\Http\Controllers\notificationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PekerjaController;


Route::get('/home', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home2');
});
Route::get('/notifikasi', function () {
    return view('notifikasi');
});
Route::get('/awards', function() {
    return view('awards');
});
Route::get('/setting', function() {
    return view('setting');
});
Route::get('/Edit', function() {
    return view('Edit');
});
Route::get('/ulasan', function() {
    return view('ulasan');
});
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

Route::get('/',[AuthController::class,'index'])->name('login');
Route::post('/login-proces',[AuthController::class,'login'])->name('login-proces');
Route::post('/register',[AuthController::class,'register'])->name('register');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');

Route::get('/penyewa/home', [HomeController::class,'HomePenyewa'])->name('penyewa-home');
Route::get('/pekerja/home', [HomeController::class,'HomePekerja'])->name('pekerja-home');
Route::get('/pekerja/tambahPekerja', [PekerjaController::class,'TambahKerja'])->name('pekerja-tambah');
Route::get('/penyewa/profile',[HomeController::class,'showProfile'])->name('penyewa-profile');
Route::get('/pekerja/profile',[HomeController::class,'showProfile'])->name('penyewa-profile');

Route::get('/admin/dahsboard', [HomeController::class,'AdminDashboard'])->name('admin-dashboard');