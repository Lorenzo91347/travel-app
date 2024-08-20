<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/auth/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/auth/login', [AuthenticatedSessionController::class, 'store']);

Route::get('/auth/signup', function () {
    return view('auth.signup');
})->name('signup');

Route::post('/auth/signup', [RegisteredUserController::class, 'register']);

require __DIR__ . '/auth.php';
