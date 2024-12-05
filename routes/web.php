<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});