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

Route::get('/payment', function () {
    return view('payment'); // Menampilkan contact.blade.php
})->name('payment');

Route::get('/ucapan', function () {
    return view('ucapan'); // Menampilkan contact.blade.php
})->name('ucapan');

use App\Http\Controllers\AuthController;




Route::get('/register', function () {
    return view('auth.register');
})->name('auth.register');

Route::post('/register', [AuthController::class, 'register'])->name('register.store');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

use App\Http\Controllers\ReservationController;

Route::get('/login', function () {
    return view('Auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login.store');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard'); // View dashboard
    })->name('dashboard')->middleware('role:admin,pegawai');

});
Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation.index');
Route::post('/reservation/store', [ReservationController::class, 'store'])->name('reservation.store');

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








Route::middleware(['auth'])->group(function () {
    // Daftar penitipan hewan
    Route::get('/penitipan', [PenitipanController::class, 'index'])->name('penitipan.index');

    // Form untuk menambah penitipan hewan
    Route::get('/penitipan/create', [PenitipanController::class, 'create'])->name('penitipan.create');

    // Proses penyimpanan data penitipan hewan
    Route::post('/penitipan', [PenitipanController::class, 'store'])->name('penitipan.store');

    Route::delete('/penitipan/{id}', [PenitipanController::class, 'destroy'])->name('penitipan.destroy');
});


use App\Http\Controllers\ReservationListController;

Route::get('/reservasi', [ReservationListController::class, 'index'])->name('reservasi.index');
Route::post('/reservasi/{id}/konfirmasi', [ReservationListController::class, 'confirmPayment'])->name('reservasi.konfirmasi');

use App\Http\Controllers\KandangController;
use App\Http\Controllers\PaymentController;

Route::get('/kandang', [KandangController::class, 'index'])->name('kandang.index');
Route::post('/kandang/{kandang_no}/assign', [KandangController::class, 'assign'])->name('kandang.assign');

Route::get('/form-bukti-pembayaran', function () {
    return view('emails.payment_notification');
})->name('form.payment');

// Proses unggahan bukti pembayaran
Route::middleware('auth')->post('/upload-bukti-pembayaran', [PaymentController::class, 'BuktiPembayaran'])
    ->name('upload.payment');
