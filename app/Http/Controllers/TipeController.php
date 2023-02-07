<?php

namespace App\Http\Controllers;

use App\Models\Tipe;
use Illuminate\Http\Request;

class TipeController extends Controller
{
    public function index(){

        $tipe = Tipe::all();

        return view('tipe.index', compact('tipe'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'nama' => 'required',
            'harga' => 'required|min:1'
        ]);

        Tipe::create($validated);
        return redirect("/tipe");
    }

    public function create(){
        return view ('Tipe.create');
    }

    public function destroy(Tipe $tipe){

        $tipe ->delete();
        return redirect()->back();
    }

    public function edit(Tipe $tipe){

        return view('tipe.edit', compact('tipe'));

    }

    public function update(Request $request, Tipe $tipe){

        $validated = $request->validate([
            'nama' => 'required',
            'harga' => 'required|min:1',
        ]);

        $tipe->update($validated);

        return redirect('/tipe');
    }

}
