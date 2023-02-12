<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index(){

        return view('laporan.index',[
            "transaksi" => Transaksi::latest()->filter(request(['search']))->get()
        ]);

    }
}
