@extends('layouts.app')

@section('title', "Transaksi || Cek In")

@section('bread_crumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-5" style="background-color:white">
        <li class="breadcrumb-item"><a href=" "><i class="fas fa-users mr-2"></i>Data Tamu</a></li>
        <li class="breadcrumb-item active" aria-current="page">Detail Tamu {{$tamu->Transaksi->kamar->nomor}}</li>
    </ol>
</nav>
@endsection

@section('content')
    <div class="card pt-1" style="box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);border-radius:10px;">
        <div class="card-body px-5">
            <div  align="center" style="margin-bottom:10px">
                <t style="font-size:30px;">Detail Tamu Kamar {{$tamu->Transaksi->kamar->nomor}}</t>
            </div>
            <form action="" method="get" class="mb-2">
                <div class="mb-3" hidden>
                    <label for="status" class="form-label" ><t>id_kamar</t></label>
                    <input type="text" class="form-control" id="status" placeholder="Masukkan nama" name="kamar_id" value="" required>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label" ><t>Nama Tamu</t></label>
                    <input type="text" class="form-control" id="status" placeholder="Masukkan nama" name="nama" value="{{$tamu->Transaksi->nama}}" disabled required>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label" ><t>Nik Tamu</t></label>
                    <input type="text" class="form-control" id="status" placeholder="Masukkan nik" name="nik" value="{{$tamu->Transaksi->nik}}" disabled required>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label" ><t>Asal Instansi</t></label>
                    <input type="text" class="form-control" id="status" placeholder="Masukkan Asal instansi" name="instansi" value="{{$tamu->Transaksi->instansi}}" disabled required>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label" ><t>Nomor HP</t></label>
                    <input type="text" class="form-control" id="status" placeholder="Masukkan No HP" name="nohp" value="{{$tamu->Transaksi->nohp}}" disabled required>
                </div>
                <div class="mb-4">
                    <label for="status" class="form-label" ><t>Email</t></label>
                    <input type="text" class="form-control" id="status" placeholder="Masukkan Email" name="email" value="{{$tamu->Transaksi->email}}" disabled required>
                </div>
                <div class="mb-3 ">
                    <label for="dari"><t>Dari</t></label>
                        <input type="date" id="date" name="tanggal_masuk" value="{{$tamu->Transaksi->tanggal_masuk}}" disabled required>
                    <label for="sampai" style="margin-left:20px"><t>Sampai</t></label>
                        <input type="date" id="date" name="tanggal_keluar" value="{{$tamu->Transaksi->tanggal_keluar}}" disabled required>
                </div>
                <div class="mb-3 ">
                    <label for="maksimal" class="form-label"> <t>Total Harga</t></label>
                    <input type="number" class="form-control" id="maksimal" name="total" value="{{$tamu->Transaksi->total}}" required disabled>
                </div>
                <div class="mt-5">
                    <a type="button" href="/tamu" class="btn btn-secondary" style=" width:100px; font-size:15px" data-dismiss="modal"><b>Kembali</b></a>
                </div>
            </form>
        </div>
    </div>

@endsection
