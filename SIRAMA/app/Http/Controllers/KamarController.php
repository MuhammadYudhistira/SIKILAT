<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function index(){

        $kamar = Kamar::all();

        return view('kamar.index', compact('kamar'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'nomor' => 'image|required',
            'status' => 'required',
            'maksimal' => 'required|min:1',

        ]);

        dd($validated);

        Kamar::create($validated);
    }

    public function create(){
        return view ('kamar.create');
    }

    

}
