<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Tamu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){

        $kamar = Kamar::all();

        $count = Kamar::where('status', 1)->count();
        $countisi = Kamar::where('status', 2)->count();

        // dd($count);
        return view('home', compact('kamar', 'count','countisi'));
    }

    public function create(kamar $kamar){
        // $kamar = Kamar::all();

        return view('transaksi.create', compact('kamar'));
    }

    public function store(kamar $kamar, Request $request){

        $validated = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'nohp' => 'required',
            'status' => 'required'
        ]);

        dd($validated);

        Tamu::create($validated);

        return redirect("/transaksi/{kamar}/checkin");
    }

    public function checkin(kamar $kamar){

        $tamu = Tamu::all();
        $kamar = Kamar::all();

        return view('transaksi.checkin', compact('kamar', 'tamu'));
    }

}
