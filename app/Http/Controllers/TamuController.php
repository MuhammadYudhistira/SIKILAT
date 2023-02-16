<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Tamu;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function index(){

        // dd(request("search"));

        return view('tamu.index',[
            "tamu" => Tamu::latest()->filter(request(['search']))->get()
        ]);

    }

    public function detail(Tamu $tamu){

        return view ('tamu.detail', compact('tamu'));
    }

    public function checkout(Tamu $tamu){

        return view('tamu.checkout', compact('tamu'));

    }
    public function destroy(Tamu $tamu){

        $tamu->delete();

        $kamar = Kamar::find($tamu->transaksi->kamar_id);

        $kamar->update([
            "maksimal"=> $kamar->maksimal + 1,
        ]);

        if($kamar->maksimal >= 1){
        $kamar->update([
            "status"=> 1
            ]);
        }

        // dd($kamar->maksimal);



        return redirect('/laporan');
    }
}
