<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\UserVerificationController;
use App\Http\Controllers\Auth\UserLoginController;

Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
Route::get('/search-properties', [UserController::class, 'searchProperties'])->name('user.search-properties');