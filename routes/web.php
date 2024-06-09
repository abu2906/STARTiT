<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\poinController;
use App\Http\Controllers\notificationController;

Route::get('/', function () {
    return view('home');
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

Route::get('/login', function() {
    return view('LogAndReg');
});