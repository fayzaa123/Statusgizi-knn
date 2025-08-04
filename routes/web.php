<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\CheckMiddleware;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\HitungController;
use App\Http\Controllers\DatasetController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\DatauserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DatabalitaController;
use App\Http\Controllers\FormBalitaController;

Route::get('/', function () {
    return redirect('/login'); ;
});

Route::get('/login', function () {
    return view('login');
})->middleware(CheckMiddleware::class)->name('login');






Route::get('/user/dashboard', function () {
    return view('user.dashboard-user');
})->name('ortu.dashboard')->withoutMiddleware(AdminMiddleware::class);


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

Route::get('/user/riwayat', function () {
    return view('user.riwayat');
})->name('riwayat');


//Route::get('/admin/dashboard', [DashboardController::class, 'dashboard_admin'])->name('dashboard-admin');

# ROUTE USER <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<

# ================================ MANAJEMEN DATA BALITA ================================

// Route untuk menampilkan data balita
Route::get('/user/balita', [FormBalitaController::class, 'index'])->name('data.balita');
// Route untuk menampilkan halaman tambah data balita
Route::get('/user/balita/tambah', [FormBalitaController::class, 'form_balita'])->name('form.balita');
// Route untuk menyimpan data balita
Route::post('/add-balita', [FormBalitaController::class,'store'])->name('add.balita');
/// Route untuk menghapus data balita
Route::delete('/user/balita/{id}', [FormBalitaController::class, 'destroy'])->name('delete.balita');
// Route untuk menampilkan halaman edit data balita
Route::get('/user/balita/{id}/edit', [FormBalitaController::class, 'edit'])->name('edit.balita');
// Route untuk mengupdate data balita
Route::put('/user/balita/{id}', [FormBalitaController::class, 'update'])->name('update.balita');

# ================================ MANAJEMEN DATA BALITA END ================================


# ================================ HISTORY HITUNG ===========================

// Route untuk menampilkan data history hitung
Route::get('/user/history', [HistoryController::class, 'index'])->name('data.history');
Route::get('/user/history/{balita}/riwayat', [HistoryController::class, 'edit'])->name('lihat.history');
Route::get('/laporan', [HistoryController::class, 'report'])->name('report.history');
# ================================ HISTORY HITUNG END ===========================

Route::get('/user/hitung', [HitungController::class, 'ukur_balita'])->name('tampil.hitung');
Route::post('/hitung/klasifikasi', [HitungController::class,'hitungKlasifikasi'])->name('hitung.klasifikasi');
Route::post('/simpan-riwayat', [HitungController::class, 'simpanRiwayat'])->name('data.simpanriwayat');

// Route untuk halaman login dan register
Route::get('/register', [AuthController::class, 'index'])->name('register.index');
// Route untuk proses registrasi dan login
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Route untuk proses logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');




Route::post('/login', [AuthController::class, 'login'])->name('login');


Route::get('/profile', [ProfileController::class, 'profile'])->name('view.profile');
Route::post('/update-profile', [ProfileController::class, 'edit'])->name('update.profile');




// Route untuk menampilkan halaman



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


Route::get('/admin/databalita', function () {
    return view('admin.databalita');
});



/** ADMIN **/

Route::middleware(['admin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'dashboard_admin'])->name('admin.dashboard');
    Route::get('/admin/dataset', [DatasetController::class, 'index'])->name('admin.dataset');

    //CRUD Dataset
    Route::post('/admin/dataset', [DatasetController::class, 'store'])->name('balita.store');
    // Route untuk menampilkan halaman edit balita
    Route::delete('/admin/dataset/{id_balita}', [DatasetController::class, 'destroy'])->name('balita.destroy');
    // Route untuk menampilkan halaman edit balita
    Route::get('/admin/dataset/{id_balita}/edit', [DatasetController::class, 'destroy'])->name('balita.edit');
    // Route untuk mengupdate data balita
    Route::put('/admin/dataset/{id_balita}', [DatasetController::class, 'update'])->name('balita.update');


});
/** ADMIN **/


/** USER **/

/** USER **/
