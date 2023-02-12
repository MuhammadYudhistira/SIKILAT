<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Tamu;
use App\Models\Tipe;
use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Builder\Trait_;

class HomeController extends Controller
{
    public function index(){

        $kamar = Kamar::orderBy('nomor');
        $tipe = Tipe::all();

        // dd($tipe);
        if(request('search')){
            $kamar->where('tipe_id', 'like', '%'. request('search'). '%');
        }

        $count = Kamar::where('status', 1)->count();
        $countisi = Kamar::where('status', 2)->count();

        // dd($count);
        return view('home', [
            "tipe"=> $tipe,
            "kamar"=>$kamar->get(),
            "count"=>$count,
            "countisi"=>$countisi
        ]);
    }

    public function create(kamar $kamar){
        // $kamar = Kamar::all();

        return view('transaksi.checkin', compact('kamar'));
    }

    public function store(kamar $kamar, Request $request){

        $validated = $request->validate([
            'kamar_id' => 'required',
            'nama' => 'required',
            'nik' => 'required',
            'instansi' => 'required',
            'nohp' => 'required',
            'email' => 'required',
            'tanggal_masuk' => 'required',
            'tanggal_keluar' => 'required',
            // 'quantity' => 'required|min:1',
            // 'total' => 'required|min:1',
        ]);

        $kamar = Kamar::find($validated["kamar_id"]);


        $kamar->update([
            "maksimal"=> $kamar->maksimal - 1,
        ]);

        if($kamar->maksimal == 0){
            $kamar->update([
                "status"=> 2
            ]);
        }


        $toDate = Carbon::parse($validated["tanggal_keluar"]);
        $fromDate = Carbon::parse($validated["tanggal_masuk"]);

        $validated["quantity"] = $toDate->diffInDays($fromDate);
        $validated["total"] = $validated["quantity"] * $kamar->tipe->harga;



        $transaksi = Transaksi::create($validated);

        $tamu = Tamu::create([
            "transaksi_id" => $transaksi->id
        ]);

        // $transaksi;
        // $tamu;

        // dd($validated, $kamar, $tamu);

        return redirect("/tamu");
    }

}
