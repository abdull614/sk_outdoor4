<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\CaraSewaController;
use App\Http\Controllers\HubungiKamiController;
use App\Http\Controllers\KatalogProdukController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProfilInfoController;
use App\Http\Controllers\SyaratSewaController;
use App\Http\Controllers\WilayahController;
use Illuminate\Support\Facades\Route;

// auth login
Route::get('/auth/google', [AuthController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback']);

// regis
Route::get('/register', [
    AuthController::class, 'showRegisForm'
])->name('regis');

Route::post('/register', [
    AuthController::class, 'register'
])->name('register');

// login
Route::get('/login', [
    AuthController::class, 'showLoginForm'
])->name('login');

Route::post('/login', [
    AuthController::class, 'loginProses'
])->name('login.proses');

// logout
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

// Semua route profil dilindungi middleware auth
Route::middleware('auth')->group(function () {
    Route::get('/profil', [ProfilController::class, 'profil'])->name('profil');
    Route::put('/profil', [ProfilController::class, 'update'])->name('profil.update');
    Route::get('/profil-change-password', [ProfilController::class, 'password'])->name('profil.password');
    // Route::get('/profil-info', [ProfilController::class, 'info'])->name('profil.info');

    // Tambahkan ini untuk tampilkan form alamat dengan data
    Route::get('/profil-info', [ProfilInfoController::class, 'tampilFormInfo'])->name('profil.info');

    // Ini untuk simpan/perbarui alamat
    Route::post('/profil/info/simpan', [ProfilInfoController::class, 'simpanInfo'])->name('profil.info.simpan');
});




// page
Route::get('/', [
    BerandaController::class, 'beranda'
])->name('beranda');

Route::get('/cara-sewa', [
    CaraSewaController::class, 'caraSewa'
])->name('cara.sewa');

Route::get('/syarat-sewa', [
    SyaratSewaController::class, 'syaratSewa'
])->name('syarat.sewa');

Route::get('/katalog-produk', [
    KatalogProdukController::class, 'katalogProduk'
])->name('katalog.produk');

Route::get('/hubungi-kami', [
    HubungiKamiController::class, 'hubungiKami'
])->name('hubungi.kami');

