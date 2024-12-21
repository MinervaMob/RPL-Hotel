<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/room', function () {
    return view('room');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login-admin', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login-admin', [AuthController::class, 'login'])->name('login.submit');
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth')->name('dashboard');

Route::get('/register', function () {
    return view('registrasi');
});

// Route untuk menampilkan form registrasi
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');

// Route untuk memproses registrasi
Route::post('/register', [AuthController::class, 'register'])->name('register.store');

Route::get('/dashboard', function () {
    return view('dashboard'); // Pastikan view dashboard ada
})->name('dashboard');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

