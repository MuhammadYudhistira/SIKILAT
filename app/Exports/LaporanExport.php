<?php

namespace App\Exports;

use App\Models\Transaksi;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;

class LaporanExport implements FromCollection,
WithMapping,
WithHeadings,
WithColumnFormatting
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // $transaksi = Transaksi::all();

        $start = request('start_date');
        $end = request('end_date');
        $transaksi = Transaksi::latest()->filter(request(['search']))->get();

        // dd($start, $end);
        if($start && $end){
           $transaksi = Transaksi::whereBetween('tanggal_masuk', [$start, $end])->get();
        }


        // dd($transaksi);

        return $transaksi;
    }

    public function map($transaksi): array{
        return [
            $transaksi->created_at,
            $transaksi->kamar->nomor,
            $transaksi->nama,
            $transaksi->tanggal_masuk,
            $transaksi->tanggal_keluar,
            $transaksi->quantity,
            $transaksi->total
        ];
    }

    public function headings(): array
    {
        return[
            'Tanggal',
            'Nomor Kamar',
            'Nama Tamu',
            'Tanggal Check-in',
            'Tanggal Check-out',
            'Jumlah Hari',
            'total'
        ];
    }

    public function columnFormats(): array
    {
        return [
            'g' => 'Rp.'
        ];
    }
}
