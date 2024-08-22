<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\Auth\AgentRegisterController; // Correctly imported
use App\Http\Controllers\Auth\UserRegisterController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\UserLoginController;
use App\Http\Controllers\User\UserVerificationController;

// Landing Page Route
Route::get('/', function () {
    return view('pages.landing');
});

// Signup Selection Page Route
Route::get('/signup-selection', [RegistrationController::class, 'showSignupSelection'])->name('signup.selection');

// User Registration Routes
Route::get('/user-register', [App\Http\Controllers\Auth\UserRegisterController::class, 'showRegistrationForm'])->name('user.register');
Route::post('/user-register', [App\Http\Controllers\Auth\UserRegisterController::class, 'register'])->name('user.register');
// Email Verification Routes
// routes/web.php

Route::middleware(['auth'])->group(function () {
    Route::get('/email/verify', [UserVerificationController::class, 'show'])->name('verification.notice');
    Route::post('/email/verification-notification', [UserVerificationController::class, 'resend'])->name('verification.resend');
    Route::get('/email/verify/{id}/{hash}', [UserVerificationController::class, 'verify'])->name('verification.verify');
});

// Default login route for users
Route::get('login', [UserLoginController::class, 'showLoginForm'])->name('user.login');
Route::post('login', [UserLoginController::class, 'login'])->name('user.login.submit');

// Agent Registration Routes
Route::get('/register/agent', [AgentRegisterController::class, 'showAgentRegisterForm'])->name('agent.register');

// Routes to handle the form submissions for individual and company agents
Route::post('/register/agent/individual', [AgentRegisterController::class, 'registerIndividual'])->name('agent.register.individual.submit');
Route::post('/register/agent/company', [AgentRegisterController::class, 'registerCompany'])->name('agent.register.company.submit');



// Agent Login Routes
Route::get('/agent-login', [App\Http\Controllers\Agent\AgentLoginController::class, 'showLoginForm'])->name('agent.login');
Route::post('/agent-login', [App\Http\Controllers\Agent\AgentLoginController::class, 'login']);
Route::post('/agent-logout', [App\Http\Controllers\Agent\AgentLoginController::class, 'logout'])->name('agent.logout');

// Admin Login Routes
Route::get('/admin-login', [App\Http\Controllers\Admin\AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin-login', [App\Http\Controllers\Admin\AdminLoginController::class, 'login']);
Route::post('/admin-logout', [App\Http\Controllers\Admin\AdminLoginController::class, 'logout'])->name('admin.logout');
