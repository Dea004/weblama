<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CoffeeShopController;
use App\Http\Controllers\BookingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Rute untuk halaman utama
Route::get('/', function () {
    return view('index'); 
});

// Rute untuk autentikasi
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rute untuk forgot password
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendVerificationCode'])->name('check.email');

// Rute untuk verifikasi kode
Route::post('/verify-code', [VerificationController::class, 'verifyCode'])->name('check.reset.otp');

// Rute untuk reset password
Route::post('/reset-password', [ResetPasswordController::class, 'resetPassword'])->name('change.password');

// Rute untuk register
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

// Halaman booking
Route::get('/booking', function () {
    return view('booking_form');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Halaman search
Route::get('/search', function () {
    return view('search');
});

// Halaman booking
Route::get('/coffee_shop', function () {
    return view('coffee_shops');
});

// Halaman booking
Route::get('/LamanPengguna', function () {
    return view('coffee_shops');
});

Route::get('/coffee-shop/{slug}', [CoffeeShopController::class, 'show'])->name('coffee_shop.show');