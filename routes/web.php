<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\ReservasiGroomingController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\HargaGroomingController;
use App\Http\Controllers\HargaPenitipanController;
use App\Http\Controllers\AdminReservasiGroomingController;
use App\Http\Controllers\HomeController;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/kritik-dan-saran', [HomeController::class, 'storeKritikDanSaran'])->name('storeKritikDanSaran');


Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

// Menampilkan form login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');

// Proses login
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Proses logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');




// Rute untuk menampilkan daftar pengguna
Route::get('/user', [UserController::class, 'showUsers'])->name('users');
Route::get('/service', [ServiceController::class, 'index'])
    ->middleware('auth')
    ->name('service');




// Rute Reservasi
Route::get('/reservasi', [ReservasiController::class, 'create'])->name('reservasi.create'); // Form reservasi
Route::post('/reservasi', [ReservasiController::class, 'store'])->name('reservasi.store'); // Proses reservasi




// Rute untuk menampilkan form pembuatan reservasi grooming
Route::get('/reservasi.grooming/create', [ReservasiGroomingController::class, 'create'])->name('reservasi.grooming.create');

// Rute untuk menyimpan data reservasi grooming
Route::post('/reservasi.grooming', [ReservasiGroomingController::class, 'store'])->name('reservasi.grooming.store');

// Rute Admin Dashboard Tanpa Middleware Auth
Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');




Route::prefix('admin/harga-grooming')->group(function () {
    Route::get('/', [HargaGroomingController::class, 'index'])->name('admin.harga-grooming.index');
    Route::get('/create', [HargaGroomingController::class, 'create'])->name('admin.harga-grooming.create');
    Route::post('/', [HargaGroomingController::class, 'store'])->name('admin.harga-grooming.store');
    Route::get('/{id}/edit', [HargaGroomingController::class, 'edit'])->name('admin.harga-grooming.edit');
    Route::put('/{id}', [HargaGroomingController::class, 'update'])->name('admin.harga-grooming.update');
    Route::delete('/{id}', [HargaGroomingController::class, 'destroy'])->name('admin.harga-grooming.destroy');
});

// Rute untuk menghapus harga grooming
Route::delete('/admin/harga-grooming/{id}', [HargaGroomingController::class, 'destroy'])->name('admin.harga-grooming.destroy');

// Rute Harga Penitipan dengan prefix admin
Route::prefix('admin')->name('admin.')->group(function () {
    // Menampilkan semua data harga penitipan
    Route::get('harga-penitipan', [HargaPenitipanController::class, 'index'])->name('harga-penitipan.index');

    // Menampilkan form untuk membuat harga penitipan baru
    Route::get('harga-penitipan/create', [HargaPenitipanController::class, 'create'])->name('harga-penitipan.create');

    // Menyimpan harga penitipan baru
    Route::post('harga-penitipan', [HargaPenitipanController::class, 'store'])->name('harga-penitipan.store');

    // Menampilkan form untuk mengedit harga penitipan
    Route::get('harga-penitipan/{id}/edit', [HargaPenitipanController::class, 'edit'])->name('harga-penitipan.edit');

    // Memperbarui harga penitipan
    Route::put('harga-penitipan/{id}', [HargaPenitipanController::class, 'update'])->name('harga-penitipan.update');

    // Menghapus harga penitipan
    Route::delete('harga-penitipan/{id}', [HargaPenitipanController::class, 'destroy'])->name('harga-penitipan.destroy');
});


// Rute untuk menampilkan form edit reservasi penitipan
Route::get('/reservasi/penitipan/{id}/edit', [ReservasiController::class, 'edit'])->name('reservasi.penitipan.edit');

// Rute untuk memperbarui data reservasi penitipan
Route::put('/reservasi/penitipan/{id}', [ReservasiController::class, 'update'])->name('reservasi.penitipan.update');



Route::get('reservasigrooming/edit/{id}', [AdminDashboardController::class, 'edit'])->name('reservasigrooming.edit');
Route::put('reservasigrooming/update/{id}', [AdminDashboardController::class, 'update'])->name('reservasigrooming.update');
Route::delete('reservasigrooming/delete/{id}', [AdminDashboardController::class, 'destroy'])->name('reservasigrooming.delete');


// Edit, update, dan delete untuk reservasipenitipan
Route::get('reservasipenitipan/edit/{id}', [AdminDashboardController::class, 'editPenitipan'])->name('reservasipenitipan.edit');
Route::put('reservasipenitipan/update/{id}', [AdminDashboardController::class, 'updatePenitipan'])->name('reservasipenitipan.update');
Route::delete('reservasipenitipan/delete/{id}', [AdminDashboardController::class, 'destroyPenitipan'])->name('reservasipenitipan.destroy');




Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('harga-grooming', [HargaGroomingController::class, 'tampilkanDaftarHargaGrooming'])->name('harga-grooming.index');
    Route::get('harga-grooming/create', [HargaGroomingController::class, 'tampilkanFormTambahHargaGrooming'])->name('harga-grooming.create');
    Route::post('harga-grooming', [HargaGroomingController::class, 'simpanHargaGrooming'])->name('harga-grooming.store');
    Route::get('harga-grooming/{id}/edit', [HargaGroomingController::class, 'tampilkanFormEditHargaGrooming'])->name('harga-grooming.edit'); // Ini harus ada
    Route::put('harga-grooming/{id}', [HargaGroomingController::class, 'perbaruiHargaGrooming'])->name('harga-grooming.update');
    Route::delete('harga-grooming/{id}', [HargaGroomingController::class, 'hapusHargaGrooming'])->name('harga-grooming.destroy');
});


Route::get('/harga-grooming', [ReservasiGroomingController::class, 'tampilkanDaftarHargaGrooming']);
// Rute untuk menampilkan, mengedit, dan menghapus jenis layanan grooming
Route::delete('/jenis-layanan/{id}', [AdminDashboardController::class, 'destroyJenisLayananGrooming'])->name('jenis-layanan.destroy');
// Rute untuk mengedit jenis layanan grooming
Route::get('/jenis-layanan/{id}/edit', [AdminDashboardController::class, 'editJenisLayananGrooming'])->name('jenis-layanan.edit');

// routes/web.php

Route::get('jenis-layanan/create', [AdminDashboardController::class, 'create'])->name('jenis-layanan.create');
Route::post('jenis-layanan', [AdminDashboardController::class, 'store'])->name('jenis-layanan.store');
Route::put('jenis-layanan/{id}', [AdminDashboardController::class, 'updateJenisLayananGrooming'])->name('jenis-layanan.update');
Route::get('jenis-layanan/{id}/edit', [AdminDashboardController::class, 'editJenisLayananGrooming'])->name('jenis-layanan.edit');


use App\Http\Controllers\ProfileController;

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

