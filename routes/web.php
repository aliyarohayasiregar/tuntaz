<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BatuController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\ForgotPasswordController;

Route::get('/', function () {
    return view('welcome'); 
});

//login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//register
Route::get('/register', [RegisterController::class,'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class,'register'])->name('register.post');

//reset password
// Route::get('/password/reset', [ForgotPasswordController::class,'showLinkRequestForm'])->name('password.request');
// Route::post('/password/email', [ForgotPasswordController::class,'sendResetLinkEmail'])->name('password.email');
// Route::get('/password/reset/{token}', [ResetPasswordController::class,'showResetForm'])->name('password.reset');
// Route::post('/password/reset', [ResetPasswordController::class,'reset'])->name('reset.update');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile');
    Route::post('/profile/update-password', [ProfileController::class, 'updatePassword'])->name('profile.update.password');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.home');
});


Route::resource('batus', BatuController::class);
