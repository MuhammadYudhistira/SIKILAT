<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function authenticate(Request $request){
        $validated = $request->validate([
            'email'=>'required|email:dns',
            'password'=>'required'
        ]);

        // dd($validated);

        //if sukses
        if(Auth::attempt($validated)){

            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->with('loginError', 'Login tidak berhasil');
    }

    public function logout(){
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/auth/login');
    }
}
