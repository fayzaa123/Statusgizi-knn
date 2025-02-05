<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DatasetController;
use App\Http\Controllers\DatauserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HitungController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\LandingController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/admin/dataset', function () {
    return view('dataset');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard-admin');
})->name('dashboard-admin');

Route::get('/user/dashboard', function () {
    return view('user.dashboard-user');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/editprofile', function () {
    return view('edit-profile');
});

Route::get('/user/hitung', function () {
    return view('user.formhitung');
});

Route::get('/landing', function () {
    return view('landing.page');
});

Route::get('/user/hasil', function () {
    return view('user.hasil');
});

Route::get('/user/hitung', [HitungController::class, 'ukur_balita'])->name('tampil.hitung');
Route::post('/hitung/klasifikasi', [HitungController::class,'hitungKlasifikasi'])->name('hitung.klasifikasi');


// Route untuk halaman login dan register
Route::get('/register', [AuthController::class, 'index'])->name('register.index');
// Route untuk proses registrasi dan login
Route::post('/register', [AuthController::class, 'register'])->name('register');
// Route untuk proses logout
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Route untuk menampilkan halaman dataset
Route::get('/admin/dataset', [DatasetController::class, 'index'])->name('balita.index')->name('balita.index');
// Route untuk menampilkan halaman
Route::post('/admin/dataset', [DatasetController::class, 'store'])->name('balita.store');
// Route untuk menampilkan halaman edit balita
Route::delete('/admin/dataset/{id_balita}', [DatasetController::class, 'destroy'])->name('balita.destroy');
// Route untuk menampilkan halaman edit balita
Route::get('/admin/dataset/{id_balita}/edit', [DatasetController::class, 'destroy'])->name('balita.edit');
// Route untuk mengupdate data balita
Route::put('/admin/dataset/{id_balita}', [DatasetController::class, 'update'])->name('balita.update');

// Route untuk menampilkan halaman datauser
Route::get('/admin/datauser', [DatauserController::class, 'index'])->name('datauser.index')->name('datauser.index');
// Route untuk menyimpan data datauser
Route::post('/admin/datauser', [DatauserController::class, 'store'])->name('datauser.store');
// Route untuk menghapus data datauser
Route::delete('/admin/datauser/{id_kelolauser}', [DatauserController::class, 'destroy'])->name('datauser.destroy');
// Route untuk menampilkan halaman edit datauser
Route::get('/admin/datauser/{id_kelolauser}/edit', [DatauserController::class, 'destroy'])->name('datauser.edit');
// Route untuk mengupdate data datauser
Route::put('/admin/datauser/{id_kelolauser}', [DatauserController::class, 'update'])->name('datauser.update');
