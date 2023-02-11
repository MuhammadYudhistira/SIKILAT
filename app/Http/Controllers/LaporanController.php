<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use PDO;

class LaporanController extends Controller
{
    public function index(){

        $transaksi = Transaksi::all();

        return view('laporan.index', compact('transaksi'));
    }
}
