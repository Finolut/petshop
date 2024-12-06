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




// use App\Http\Controllers\ReservationController;

// Route::get('/pembayaran', [ReservationController::class, 'pembayaran'])->name('pembayaran');
// Route::post('/pembayaran', [ReservationController::class, 'store'])->name('reservation.store');

use App\Http\Controllers\PenitipanController;

Route::resource('penitipan', PenitipanController::class);


Route::get('/users', [UserController::class, 'index'])->name('users.index'); // Menampilkan semua users
Route::get('/users/create', [UserController::class, 'create'])->name('users.create'); // Form untuk menambahkan users
Route::post('/users', [UserController::class, 'store'])->name('users.store'); // Menyimpan users baru
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit'); // Form untuk mengedit users
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update'); // Mengupdate users yang sudah ada
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy'); // Menghapus vendor

use App\Http\Controllers\RoleController;

Route::get('/role', [RoleController::class, 'index'])->name('role.index'); // Menampilkan semua role
Route::get('/role/create', [RoleController::class, 'create'])->name('role.create'); // Form untuk menambahkan role
Route::post('/role', [RoleController::class, 'store'])->name('role.store'); // Menyimpan role baru
Route::get('/role/{id}/edit', [RoleController::class, 'edit'])->name('role.edit'); // Form untuk mengedit role
Route::put('/role/{id}', [RoleController::class, 'update'])->name('role.update'); // Mengupdate role yang sudah ada
Route::delete('/role/{id}', [RoleController::class, 'destroy'])->name('role.destroy'); // Menghapus vendor

use App\Http\Controllers\ReservationController;

Route::get('/reservationi', [ReservationController::class, 'index'])->name('reservation.index');
Route::post('/reservation/store', [ReservationController::class, 'store'])->name('reservation.store');




Route::middleware(['auth'])->group(function () {
    // Daftar penitipan hewan
    Route::get('/penitipan', [PenitipanController::class, 'index'])->name('penitipan.index');

    // Form untuk menambah penitipan hewan
    Route::get('/penitipan/create', [PenitipanController::class, 'create'])->name('penitipan.create');

    // Proses penyimpanan data penitipan hewan
    Route::post('/penitipan', [PenitipanController::class, 'store'])->name('penitipan.store');
});

use App\Http\Controllers\TransaksiController;

Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');


use App\Http\Controllers\ReservationListController;

// Route untuk halaman daftar reservasi
Route::get('/listreservasi', [ReservationListController::class, 'index'])->name('reservation.list');
