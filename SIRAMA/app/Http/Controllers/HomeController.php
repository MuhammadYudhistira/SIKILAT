<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $kamar = Kamar::all();

        return view('home', compact('kamar'));
    }

}
