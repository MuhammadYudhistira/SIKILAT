@extends('layouts.app')

@section('title', "Daftar Kamar")

@section('bread_crumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb " style="background-color:white">
        <li class="breadcrumb-item"><a href=" "><i class="fas fa-bed icon mr-2"></i>Kelola Kamar</a></li>
        <li class="breadcrumb-item active" aria-current="page">Daftar Kamar</li>
    </ol>
</nav>
@endsection

@section('content')
    <t style="font-size:30px">Daftar Kamar</t><br><br>
    <div class="card pt-1" style="box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);border-radius:10px;">
        <div class="card-body">
            <div class="col-4 mt-3" style="float: right;">
                <form action="/kamar">
                    <div class="input-group align-right">
                        <input type="text" class="form-control" placeholder="Search Kamar..." name="search" value="{{request('search')}}">
                        <button class="btn btn-success " type="submit">Search</button>
                    </div>
                </form>
            </div>
            <br>
            <button class="btn btn-success" ><a href="/kamar/create" style="color:white; " >Tambah Kamar</a></button> <br><br>
            <table id="myTable" class="table  table-bordered  table-hover"style="width:100%;background-color: white">
                <thead>
                    <tr class="bg-secondary text-center" scope="col" class="">
                        <th style="width:5%">No.</th>
                        <th style="width:10%">Nomor Kamar</th>
                        <th style="width:15%">Harga</th>
                        <th style="width:15%">Gedung</th>
                        <th style="width:10%">Kapasitas</th>
                        <th style="width:20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kamar as $k)
                    <tr class="text-center">
                        <td>{{ $loop->iteration }}.</td>
                        <td>{{ $k->nomor }}</td>
                        <td>Rp.{{ $k->tipe->harga }}</td>
                        <td>{{ $k->tipe->nama }}</td>
                        <td>{{ $k->maksimal}}</td>
                        <td>
                            <a href="/kamar/{{ $k->id }}/edit" class="btn btn-success">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg>
                            </a>
                            <a href="/kamar/{{ $k->id }}" class="btn btn-danger" onclick="return confirm('anda yakin menghapus data ini ?')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
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

