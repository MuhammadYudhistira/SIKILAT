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
                <td>{{ $t->nama }}</td>
                <td>{{ $t->alamat }}</td>
                <td>{{ $t->nohp }}</td>
                <td>{{ $t->status }}</td>
                {{-- <td>

                    <a href="/tipe/{{ $t->id }}/edit" class="btn btn-warning">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                      </svg>
                    </a>
                    <a href="/tipe/{{ $t->id }}" class="btn btn-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                          </svg>
                    </a>
                </td> --}}
            </tr>
            @endforeach
        </tbody> -->