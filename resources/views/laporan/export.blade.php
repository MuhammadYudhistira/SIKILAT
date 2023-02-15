@extends('layouts.app')
@section('content')
<table id="myTable" class="table  table-bordered  table-hover"style="width:100%;background-color: white">
    <thead>
        <tr class="bg-secondary text-center" scope="col" class="">
            <th style="width:5%">No.</th>
            <th style="width:15%">Tanggal</th>
            <th style="width:20%">Nama Tamu</th>
            <th style="width:15%">Nomor Kamar</th>
            <th style="width:10%">Jumlah Hari</th>
            <th style="width:15%">Total Transaksi</th>
            <th style="width:10%">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($transaksi as $t)
        <tr class="text-center">
            <td>{{ $loop->iteration }}.</td>
            <td>{{$t->tanggal_masuk}}</td>
            <td>{{$t->nama}}</td>
            <td>{{$t->kamar->nomor}}</td>
            <td>{{$t->quantity}}</td>
            <td>Rp.{{$t->total}}</td>
            <td>
                <a href="/laporan/{{$t->id}}/detail" class="btn btn-success">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                        <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                        <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                    </svg>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
