@extends('layouts.app')

@section('title', "Daftar Kamar || Edit")

@section('bread_crumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb " style="background-color:white">
        <li class="breadcrumb-item"><a href=" "><i class="fas fa-bed icon mr-2"></i>Kelola Kamar</a></li>
        <li class="breadcrumb-item"><a href="/kamar">Daftar Kamar</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Kamar</li>
    </ol>
</nav>
@endsection

@section('content')
<div class="card pt-1" style="box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);border-radius:10px; width:70%">
    <div class="card-body px-5">
        <center><t style="font-size:30px;">Form Edit Kamar</t></center><br>
        <form action="/kamar/{{ $kamar ->id }}" method="post" class="mb-5">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="customer_id" class="form-label"><b>Tipe Kamar</b> </label>
                <select class="form-select" aria-label="Default select example" id="tipe_id" name="tipe_id">
                    <option hidden>Pilih Tipe Kamar</option>
                    @foreach ($tipe as $t)
                    <option value="{{ $t->id }}">{{ $t->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label"><b>Nomor</b></label>
                <input type="text" class="form-control" id="nomor" placeholder="Nomor kamar..." name="nomor" value="{{$kamar ->nomor}}">
            </div>

            <div class="mb-2">
                <label for="status" class="form-label"><b>Status</b></label>
                <input type="number" class="form-control" id="status" placeholder="" name="status" min="1" value="{{$kamar ->status}}">
                <label for="" style="color:#6c757d">*Status : 1. Kamar Kosong ; 2. Kamar Terisi</label>
            </div>

            <div class="mb-3">
                <label for="maksimal" class="form-label"><b>Kapasitas</b></label>
                <input type="number" class="form-control" id="maksimal" placeholder="...orang" name="maksimal" min="1" value="{{$kamar ->maksimal}}">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success px-3">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
