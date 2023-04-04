<?php

namespace App\Http\Controllers;

use App\Exports\LaporanExport;
use App\Models\Transaksi;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class LaporanController extends Controller
{
    public function index(){

        $start = request('start_date');
        $end = request('end_date');
        $transaksi = Transaksi::latest()->filter(request(['search']))->get();

        // dd($start, $end);
        if($start && $end){
            $transaksi = Transaksi::whereBetween('tanggal_masuk', [$start, $end])->get();
        }


        return view('laporan.index',[
            "transaksi" => $transaksi
        ]);

    }

    public function detail(Transaksi $transaksi) {
        // $transaksi = Transaksi::all();
        // dd($transaksi);
        return view('laporan.detail',compact('transaksi'));
    }

    public function export(){

        return Excel::download(new LaporanExport, 'Laporan.xlsx');
    }

    public function cetak(Transaksi $transaksi){

        $pdf = PDF::loadview('laporan.invoicepdf', ['transaksi'=>$transaksi]);
        return $pdf->download('cetak-invoice.pdf');

        // return view('laporan.invoicepdf',compact('transaksi'));
    }
}
