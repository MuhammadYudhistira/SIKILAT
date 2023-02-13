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


<div class="card" style="box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);border-radius:10px;">
    <div class="card-body">
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
                    <th style="width:25%">Nama Tamu</th>
                    <th style="width:10%">Nomor Kamar</th>
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
                        {{-- <a href="/tamu/{{$t->id}}/checkout" class="btn btn-danger">Check out</a><br> --}}
                        <a href="/laporan/{{$t->id}}/detail" class="btn btn-success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                              </svg>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
