<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\poinController;
use App\Http\Controllers\notificationController;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('home');
})->name('home');

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
    return view('rating');
});

Route::get('/login',[AuthController::class,'index'])->name('login');
Route::post('/login-proces',[AuthController::class,'login'])->name('login-proces');
Route::post('/register',[AuthController::class,'register'])->name('register');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');