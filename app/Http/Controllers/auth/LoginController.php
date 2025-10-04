<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function Login(Request $Request): RedirectResponse
    {
        $credentials = $Request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('admin')->attempt($credentials, $Request->boolean('remember'))) {
            $Request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }
        return back();
    }
    public function logout(Request $Request): RedirectResponse
    {
        Auth::guard('admin')->logout();
        $Request->session()->invalidate(); // Hancurkan Session
        $Request->session()->regenerateToken(); // Regenerasi CSRF token

        return redirect()->intended('/');
    }
}
