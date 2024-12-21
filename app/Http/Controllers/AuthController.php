<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login_get() {
        return view('auth.login');
    }

    public function login_post(Request $request) {
        if(!Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            return redirect()->back()->with('status', 'Invalid credentials');
        }

        return redirect('/dashboard');
    }

    public function logout_post() {
        Auth::logout();
        Session::flush();
        return redirect('/');
    }
}
