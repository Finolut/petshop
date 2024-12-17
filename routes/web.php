<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthController,
    UserController,
    RoleController,
    PenitipanController,
    ReservationController,
    ReservationListController,
    KandangController,
    ProductController,
    AcceptedReservationController
};

// Public Routes
Route::view('/', 'landing')->name('landing');
Route::view('/pricing', 'pricing')->name('pricing');
Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/contact', 'contact')->name('contact');
Route::view('/pembayaran', 'pembayaran')->name('pembayaran');
Route::view('/form', 'form')->name('form');
Route::view('/payment', 'payment')->name('payment');
Route::view('/ucapan', 'ucapan')->name('ucapan');


// Authentication Routes
Route::view('/register', 'auth.register')->name('auth.register');
Route::post('/register', [AuthController::class, 'register'])->name('register.store');
Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.store');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard (with Role Middleware)
Route::middleware(['auth'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard')->middleware('role:admin,pegawai');
});

// Reservation Routes
Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation.index');
Route::post('/reservation/store', [ReservationController::class, 'store'])->name('reservation.store');

// User Management Routes
Route::prefix('users')->name('users.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::post('/', [UserController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('edit');
    Route::put('/{id}', [UserController::class, 'update'])->name('update');
    Route::delete('/{id}', [UserController::class, 'destroy'])->name('destroy');
});

// Role Management Routes
Route::prefix('role')->name('role.')->group(function () {
    Route::get('/', [RoleController::class, 'index'])->name('index');
    Route::get('/create', [RoleController::class, 'create'])->name('create');
    Route::post('/', [RoleController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [RoleController::class, 'edit'])->name('edit');
    Route::put('/{id}', [RoleController::class, 'update'])->name('update');
    Route::delete('/{id}', [RoleController::class, 'destroy'])->name('destroy');
});

// Penitipan Hewan Routes
Route::middleware(['auth'])->prefix('penitipan')->name('penitipan.')->group(function () {
    Route::get('/', [PenitipanController::class, 'index'])->name('index');
    Route::get('/create', [PenitipanController::class, 'create'])->name('create');
    Route::post('/', [PenitipanController::class, 'store'])->name('store');
    Route::delete('/{id}', [PenitipanController::class, 'destroy'])->name('destroy');
});

// Reservation List and Payment Confirmation
Route::get('/reservasi', [ReservationListController::class, 'index'])->name('reservasi.index');
Route::post('/reservasi/{id}/konfirmasi', [ReservationListController::class, 'confirmPayment'])->name('reservasi.konfirmasi');

// Kandang Routes
Route::get('/kandang', [KandangController::class, 'index'])->name('kandang.index');
Route::post('/kandang/{kandang_no}/assign', [KandangController::class, 'assign'])->name('kandang.assign');

// Product Management
Route::resource('products', ProductController::class);

use App\Http\Controllers\BuktiController;

Route::get('/bukti', [BuktiController::class, 'index'])->name('products.bukti');

use App\Http\Controllers\AdminController;

Route::get('/admin/login', function () {
    return view('admin.login');
})->name('admin.login');

Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');


Route::get('/reservasi/accepted', [AcceptedReservationController::class, 'index'])->name('reservasi.accepted');
Route::resource('accepted', AcceptedReservationController::class);