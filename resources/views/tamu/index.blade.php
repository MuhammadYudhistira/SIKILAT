@extends('layouts.app')

@section('title', "Daftar Tamu")

@section('bread_crumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-5" style="background-color:white">
        <li class="breadcrumb-item active" aria-current="page" style="margin-top:5px">
            <i class="fas fa-users mr-2" style="color:black"></i>
            <b style="font-size:20px; color:black">Daftar Tamu</b>
        </li>
    </ol>
</nav>
@endsection

@section('content')
<body>
    {{-- Search Form --}}
    <div class="row">
        <div class="col-md-3">
            <form action="/tamu">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name="search" value="{{request('search')}}">
                    <button class="btn btn-success " type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
    {{-- <button><a href="/tipe/create">Tambah Tipe Kamar</a></button> <br><br> --}}
    <div  class="card-body" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <table class="table  table-bordered  table-hover" style="width:100%;background-color: white">
        <thead>
            <tr class="bg-secondary text-center" scope="col" class="">
                <th style="width:1%">No.</th>
                <th style="width:10%">Nama</th>
                {{-- <th style="width:10%">NIK</th> --}}
                <th style="width:10%">No.HP</th>
                <th style="width:10%">instansi</th>
                {{-- <th style="width:10%">Email</th> --}}
                <th style="width:10%">Tanggal Masuk</th>
                <th style="width:10%">Tanggal Keluar</th>
                <th style="width:10%">Total</th>
                <th style="width:10%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tamu as $t)
            <tr class="text-center">
                <td>{{ $loop->iteration }}.</td>
                <td>{{ $t->transaksi->nama }}</td>
                {{-- <td>{{ $t->transaksi->nik }}</td> --}}
                <td>{{ $t->transaksi->nohp }}</td>
                <td>{{ $t->transaksi->instansi }}</td>
                {{-- <td>{{ $t->transaksi->email }}</td> --}}
                <td>{{ $t->transaksi->tanggal_masuk }}</td>
                <td>{{ $t->transaksi->tanggal_keluar }}</td>
                <td>Rp.{{ $t->transaksi->total }}</td>
                <td>
                    <a href="/tamu/{{$t->id}}/checkout" class="btn btn-danger">Check out</a><br>
                    <a href="/tamu/{{$t->id}}/detail" class="btn btn-secondary">Lihat</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>

</body>
</html>
@endsection
