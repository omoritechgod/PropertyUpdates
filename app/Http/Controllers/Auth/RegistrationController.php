<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class RegistrationController extends Controller
{
    /**
     * Show the signup selection page.
     *
     * @return \Illuminate\View\View
     */
    public function showSignupSelection()
    {
        return view('auth.signup-selection');
    }
}
