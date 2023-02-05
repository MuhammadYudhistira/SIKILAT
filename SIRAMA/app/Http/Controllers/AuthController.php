<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function index(){
        return view('auth.login');
    }

    function login(Request $request){
        $validated = $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        // dd($validated);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password
        ];

        //if sukses
        if(Auth::attempt($infologin)){

            // return 'sukses';
            return redirect('/');
        }else{

            return redirect ('/auth/login');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('/auth/login');
    }
}
