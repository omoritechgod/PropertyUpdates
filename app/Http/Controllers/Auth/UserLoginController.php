<?php


 namespace App\Http\Controllers\Auth;

 use Illuminate\Foundation\Auth\AuthenticatesUsers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.user-login');
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);

        if (Auth::guard('web')->attempt($request->only('email', 'password'))) {
            return redirect()->route('user.dashboard');
        }

        return back()->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('home');
    }
}
