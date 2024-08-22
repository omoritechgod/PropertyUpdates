<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Agent\AgentController;
use App\Http\Controllers\Agent\AgentVerificationController;

// routes/agent.php
// Route::get('email/verify', [AgentVerificationController::class, 'show'])->name('verification.notice');
// Route::get('email/verify/{id}/{hash}', [AgentVerificationController::class, 'verify'])->name('verification.verify');
// Route::post('email/resend', [AgentVerificationController::class, 'resend'])->name('verification.resend');

Route::get('/dashboard', [AgentController::class, 'dashboard'])->name('agent.dashboard');
Route::get('/manage-properties', [AgentController::class, 'manageProperties'])->name('agent.manage-properties');
