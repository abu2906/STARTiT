<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/Login', function () {
    return view('LogAndReg');
});

Route::get('/seller', function () {
    return view('seller');
});