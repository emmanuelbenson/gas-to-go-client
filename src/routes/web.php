<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\OTPController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/sign-in', [AuthController::class, 'getSignIn'])->name('signIn');
Route::post('/sign-in', [AuthController::class, 'getSignIn'])->name('signIn');

Route::get('/sign-up', [AuthController::class, 'getSignUp'])->name('signUp');
Route::post('/sign-up', [AuthController::class, 'postSignUp'])->name('signUp');

Route::get('/password-reset', [AuthController::class, 'getPasswordReset'])->name('passwordReset');
Route::post('/password-reset', [AuthController::class, 'getPasswordReset'])->name('passwordReset');

Route::get('/reset-password', [AuthController::class, 'getResetPassword'])->name('resetPassword');
Route::post('/reset-password', [AuthController::class, 'getResetPassword'])->name('resetPassword');

Route::get('/verify-otp', [OTPController::class, 'getVerify'])->name('getVerifyOtp');
Route::post('/verify-otp', [OTPController::class, 'postVerify'])->name('postVerifyOtp');

Route::post('/resend-otp', [OTPController::class, 'resend'])->name('resendOtp');
