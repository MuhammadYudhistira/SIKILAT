<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
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
            return redirect('/kamar');
        }else{

            return redirect ('/auth/login');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/auth/login');
    }
}
