<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index(){
        // dd(request('tanggal_masuk'));
        return view('laporan.index',[
            "transaksi" => Transaksi::latest()->filter(request(['search']))->get()
        ]);

    }

    public function detail(Transaksi $transaksi) {
        // $transaksi = Transaksi::all();
        // dd($transaksi);
        return view('laporan.detail',compact('transaksi'));
    }
}
