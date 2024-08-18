<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/auth/signup', function () {
    return view('auth.signup');
})->name('signup');

require __DIR__ . '/auth.php';
