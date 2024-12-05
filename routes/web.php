<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('landing'); // Menampilkan landing.blade.php
})->name('landing');

Route::get('/pricing', function () {
    return view('pricing'); // Menampilkan pricing.blade.php
})->name('pricing');

Route::get('/about', function () {
    return view('about'); // Menampilkan about.blade.php
})->name('about');

Route::get('/services', function () {
    return view('services'); // Menampilkan services.blade.php
})->name('services');

Route::get('/contact', function () {
    return view('contact'); // Menampilkan contact.blade.php
})->name('contact');

Route::get('/pembayaran', function () {
    return view('pembayaran'); // Menampilkan contact.blade.php
})->name('pembayaran');

Route::get('/form', function () {
    return view('form'); // Menampilkan contact.blade.php
})->name('form');

Route::get('/dashboardadmin', function () {
    return view('dashboard');
});

use App\Http\Controllers\AuthController;



Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [AuthController::class, 'register'])->name('users.store');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard'); // Buatkan dashboard.blade.php
    })->name('dashboard');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});




use App\Http\Controllers\ReservationController;

Route::get('/pembayaran', [ReservationController::class, 'pembayaran'])->name('pembayaran');
Route::post('/pembayaran', [ReservationController::class, 'store'])->name('reservation.store');

use App\Http\Controllers\PenitipanController;

Route::resource('penitipan', PenitipanController::class);
