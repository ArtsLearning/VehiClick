<?php

use Illuminate\Support\Facades\Route;

Route::get('/Home', function () {
    return view('Home');
});

Route::get('/Login', function () {
    return view('Login');
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
