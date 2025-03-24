<?php

use Illuminate\Support\Facades\Route;

Route::get('/Home', function () {
    return view('Home');
});

Route::get('/Register', function () {
    return view('Register');
});

Route::get('/Dashboard', function () {
    return view('Dashboard');
});

Route::get('/Product', function () {
    return view('Product');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/detail_produk', function () {
    return view('detail_produk');
});

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/logout', function () {
    return view('logout');
});