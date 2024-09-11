<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('layouts.dashboard');
})->middleware('auth')->name('dashboard');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/auth/login', [AuthenticatedSessionController::class, 'store'])->name('auth.login');

Route::get('/signup', function () {
    return view('auth.signup');
})->name('signup');

Route::post('/auth/signup', [RegisteredUserController::class, 'register']);


Route::get('/map', function () {
    $apiKey = env('API_KEY');
    return view('travelpages.map', compact($apiKey));
})->name('map');

//require __DIR__ . '/auth.php';
