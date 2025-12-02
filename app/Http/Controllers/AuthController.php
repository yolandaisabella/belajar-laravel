<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.login');
    }


    public function login(Request $request)
    {
        $input = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt($input)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        return back()->withErrors([
            'email' => 'Email atau Password Salah!',
        ]);
    }

        public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
