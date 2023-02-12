<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Tipe;

use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function index(){

        $kamar = Kamar::orderBy('nomor')->get();
        $tipe = Tipe::all();

        return view('kamar.index', compact('kamar', 'tipe'));
    }

    public function create(){

        $kamar = kamar::all();
        $tipe = Tipe::all();
        return view ('kamar.create', compact('kamar', 'tipe'));

    }

    public function store(Request $request){
        $validated = $request->validate([
            'tipe_id' => 'required',
            'nomor' => 'required',
            'status' => 'required',
            'maksimal' => 'required|min:1'
        ]);

        // dd($validated);

        Kamar::create($validated);

        return redirect("/kamar");
    }

    public function destroy(kamar $kamar){

        $kamar ->delete();
        return redirect()->back();
    }

    public function edit(kamar $kamar){
        $tipe = Tipe::all();
        return view('kamar.edit', compact('kamar', 'tipe'));

    }

    public function update(Request $request, kamar $kamar){

        $validated = $request->validate([
            'tipe_id' => 'required',
            'nomor' => 'required',
            'status' => 'required',
            'maksimal' => 'required|min:1'
        ]);

        // dd($validated);
        $kamar->update($validated);

        return redirect('/kamar');
    }



}
