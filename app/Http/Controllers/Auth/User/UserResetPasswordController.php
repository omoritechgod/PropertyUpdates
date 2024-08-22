<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class UserResetPasswordController extends Controller
{
    use ResetsPasswords;

    protected $redirectTo = '/user/dashboard';

    public function __construct()
    {
        $this->middleware('guest:web');
    }
}
