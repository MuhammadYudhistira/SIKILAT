@extends('layouts.app')

@section('title', "Daftar Tamu")

@section('bread_crumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb " style="background-color:white">
        <li class="breadcrumb-item"><a href=" "><i class="fas fa-bed icon mr-2"></i>Kelola Kamar</a></li>
        <li class="breadcrumb-item"><a href="/kamar">Daftar Kamar</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah Kamar</li>
    </ol>
</nav>
@endsection

@section('content')
<div class="card pt-1" style="box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);border-radius:10px; width:70%">
    <div class="card-body px-5">
        <center><t style="font-size:30px;">Form Tambah Kamar</t></center><br>

        <form action="/kamar" method="post" class="mb-3">
            @csrf
            <div class="mb-3">
                <label for="customer_id" class="form-label"><b>Tipe Kamar</b></label>
                <select class="form-select" aria-label="Default select example" id="tipe_id" name="tipe_id">
                    <option hidden>Pilih Tipe Kamar</option>
                    @foreach ($tipe as $t)
                    <option value="{{ $t->id }}">{{ $t->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label"><b>Nomor</b></label>
                <input type="text" class="form-control" id="nomor" placeholder="Masukkan Nomor Kamar" name="nomor">
            </div>

            <div class="mb-3" hidden>
                <label for="status" class="form-label" ><b>Status</b></label>
                <input type="number" class="form-control" id="status" placeholder="Masukkan Status Kamar" name="status" min="1" value="1">
            </div>

            <div class="mb-3">
                <label for="maksimal" class="form-label"><b>Kapasitas</b></label>
                <input type="number" class="form-control" id="maksimal" placeholder="Masukkan Kapasitas Kamar" name="maksimal" min="1">
            </div>

            <div class="mt-4">
                <a type="button" href="/kamar" class="btn btn-secondary" style=" width:100px; font-size:15px" data-dismiss="modal"><b>Kembali</b></a>
                <button type="submit" class="btn btn-success px-3" style=" width:100px; font-size:15px"><b>Simpan</b></button>
            </div>
        </form>
    </div>
</div>
@endsection
