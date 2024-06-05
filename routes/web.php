<?php
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('LogAndReg');
});

Route::get('/profile', [ProfileController::class, 'show']);
