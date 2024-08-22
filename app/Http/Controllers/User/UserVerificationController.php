<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Log; // Add this line

class UserVerificationController extends Controller
{
    public function __construct()
    {
        // Ensure the user is authenticated before accessing the verify and resend methods
        $this->middleware(['auth', 'signed'])->only('verify');
        $this->middleware('auth')->only(['resend', 'show']); // Apply auth middleware
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
    

    public function show()
    {
        return view('auth.verify');
    }

    public function verify(EmailVerificationRequest $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->route('user.dashboard');
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }

        return redirect()->route('user.dashboard')->with('verified', true);
    }

    public function resend(Request $request)
    {
        // Check if the user is authenticated
        if (!$request->user()) {
            Log::error('User not authenticated when trying to resend verification email.');
            return redirect()->route('login')->with('error', 'Please log in to resend the verification email.');
        }
        // Log the email address to which the verification email is sent
        Log::info('Sending verification email to: ' . $request->user()->email);

        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->route('user.dashboard');
        }

        $request->user()->sendEmailVerificationNotification();

        return back()->with('resent', true);
    }
}
