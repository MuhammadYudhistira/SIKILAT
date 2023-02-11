@extends('layouts.app')

@section('title', "Laporan")

@section('bread_crumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-5" style="background-color:white">
        <li class="breadcrumb-item active" aria-current="page" style="margin-top:5px">
            <i class="fas fa-users mr-2" style="color:black"></i>
            <b style="font-size:20px; color:black">Laporan Transaksi</b>
        </li>
    </ol>
</nav>
@endsection

@section('content')
<body>
    {{-- <button><a href="/tipe/create">Tambah Tipe Kamar</a></button> <br><br> --}}
    <div  class="card-body" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <table class="table  table-bordered  table-hover" style="width:100%;background-color: white">
        <thead>
            <tr class="bg-secondary text-center" scope="col" class="">
                <th style="width:1%">No.</th>
                <th style="width:10%">Nama</th>
                <th style="width:10%">NIK</th>
                <th style="width:10%">No.HP</th>
                <th style="width:10%">instansi</th>
                <th style="width:10%">Email</th>
                <th style="width:10%">Tanggal Masuk</th>
                <th style="width:10%">Tanggal Keluar</th>
                <th style="width:10%">Total</th>
                {{-- <th style="width:10%">Aksi</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($transaksi as $t)
            <tr class="text-center">
                <td>{{ $loop->iteration }}.</td>
                <td>{{ $t->nama }}</td>
                <td>{{ $t->nik }}</td>
                <td>{{ $t->nohp }}</td>
                <td>{{ $t->instansi }}</td>
                <td>{{ $t->email }}</td>
                <td>{{ $t->tanggal_masuk }}</td>
                <td>{{ $t->tanggal_keluar }}</td>
                <td>Rp.{{ $t->total }}</td>
                {{-- <td>
                    <a href="/tamu/{{$t->id}}/checkout" class="btn btn-danger">Check out</a><br>
                    <a href="/tamu/{{$t->id}}/detail" class="btn btn-secondary">Lihat</a>
                </td> --}}
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>

</body>
</html>
@endsection
