<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\poinController;
use App\Http\Controllers\notificationController;

Route::get('/home', function () {
    return view('home');
});

Route::get('/home2', function () {
    return view('home2');
});

Route::get('/profile', function () {
    return view('profile');
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

Route::get('/', function() {
    return view('LogAndReg');
});

Route::get('/TambahPekerjaan', function() {
    return view('TambahPekerjaan');
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
Route::get('/dashboard', function() {
    return view('Dashboard');
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