<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\CaraSewaController;
use App\Http\Controllers\HubungiKamiController;
use App\Http\Controllers\KatalogProdukController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SyaratSewaController;
use Illuminate\Support\Facades\Route;

// auth login
Route::get('/auth/google', [AuthController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback']);


// login
Route::get('/login', [
    AuthController::class, 'showLoginForm'
])->name('login');

Route::post('/login', [
    AuthController::class, 'loginProses'
])->name('login.proses');

// profil
Route::get('/profil', [
    ProfilController::class, 'profil'
])->name('profil');

Route::get('/profil-change-passowrd', [
    ProfilController::class, 'password'
])->name('password');



// regis
Route::get('/register', [
    AuthController::class, 'showRegisForm'
])->name('regis');

Route::post('/register', [
    AuthController::class, 'register'
])->name('register');

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

