@extends('layouts.app')

@section('title', "Laporan")

@section('bread_crumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-5" style="background-color:white">
        <li class="breadcrumb-item active" aria-current="page" style="margin-top:5px">
            <i class="fas fa-book icon" style="color:#013555"></i>
            <b style="font-size:20px; color:#013555">Laporan Transaksi</b>
        </li>
    </ol>
</nav>
@endsection

@section('content')
<div class="card" style="box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);border-radius:10px;">
    <div class="card-body px-4">
        <div class="row">
            <div class="col-8">
                <t style="font-size:35px">Laporan Transaksi</t>
            </div>
            <div class="col-4 mt-3">
                {{-- Search Form --}}
                <form action="/laporan">
                    <div class="input-group align-right">
                        <input type="text" class="form-control" placeholder="Search..." name="search" value="{{request('search')}}">
                        <button class="btn btn-success " type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div><br>

        <t>Filter Tanggal</t><br>
        <form action="/laporan">
        <div>
            <label for="" style="margin-right:20px;margin-top:5px">Dari</label>
            <input type="date" id="date" name="tanggal_masuk" value="{{request('tanggal_masuk')}}">
            {{-- <input type="date" id="date" name="tanggal_masuk" value="{{ now()->format('Y-m-d') }}" hidden> --}}
        </div>
        <div style="margin-top:3px;">
            <label for="">Sampai </label>
            <input type="date" id="date" name="tanggal_keluar" value="{{request('tanggal_keluar')}}">
            {{-- <input type="date" id="date" name="tanggal_keluar" value="{{ now()->format('Y-m-d') }}" hidden> --}}
            <button class="btn btn-success " type="submit" style="margin-left:5px; width:80px; height:30px;padding:0px">Cari Data</button>
        </div>
        </form>
        <br>
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
                    <td>{{$t->updated_at}}</td>
                    <td>{{$t->nama}}</td>
                    <td>{{$t->kamar->nomor}}</td>
                    <td>{{$t->quantity}}</td>
                    <td>{{$t->total}}</td>
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
        <button type="button" href="" class="btn btn-success" style=" width:100px; font-size:15px; ">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
            </svg>
            <b style="margin-left:5px">Cetak</b> 
        </button>
    </div>
</div>

@endsection
