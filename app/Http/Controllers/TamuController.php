<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function index(){
        $tamu = Tamu::all();

        return view('tamu.index', compact('tamu'));
    }
}
