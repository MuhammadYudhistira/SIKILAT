@extends('layouts.app')

@section('title', "Laporan || Detail")

@section('bread_crumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-5" style="background-color:white">
        <li class="breadcrumb-item"><a href="/laporan"><i class="fas fa-home mr-2"></i>Laporan</a></li>
        <li class="breadcrumb-item active" aria-current="page">Detail</li>
    </ol>
</nav>
@endsection

@section('content')
    <div class="card pt-1 " style="box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);border-radius:10px;">
        <div class="card-body px-4">
            <div  align="center" style="margin-bottom:10px">
                <t style="font-size:30px;">Detail Tamu Kamar {{$transaksi->kamar->nomor}}</t>
            </div>
            <form action="" method="get" class="mb-2">
                <div class="mb-3" hidden>
                    <label for="status" class="form-label" ><t>id_kamar</t></label>
                    <input type="text" class="form-control" id="status" placeholder="Masukkan nama" name="kamar_id" value="" required>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label" ><t>Nama Tamu</t></label>
                    <input type="text" class="form-control" id="status" placeholder="Masukkan nama" name="nama" value="{{$transaksi->nama}}" disabled required>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label" ><t>Nik Tamu</t></label>
                    <input type="text" class="form-control" id="status" placeholder="Masukkan nik" name="nik" value="{{$transaksi->nik}}" disabled required>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label" ><t>Asal Instansi</t></label>
                    <input type="text" class="form-control" id="status" placeholder="Masukkan Asal instansi" name="instansi" value="{{$transaksi->instansi}}" disabled required>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label" ><t>Nomor HP</t></label>
                    <input type="text" class="form-control" id="status" placeholder="Masukkan No HP" name="nohp" value="{{$transaksi->nohp}}" disabled required>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label" ><t>Email</t></label>
                    <input type="text" class="form-control" id="status" placeholder="Masukkan Email" name="email" value="{{$transaksi->email}}" disabled required>
                </div>
                <div class="mb-3 ">
                    <label for="status" class="form-label" ><t>Jumlah Hari</t></label><br>
                    <label for="dari">Dari</label>
                        <input type="date" id="date" name="tanggal_masuk" value="{{$transaksi->tanggal_masuk}}" disabled required>
                    <label for="sampai" style="margin-left:20px">Sampai</label>
                        <input type="date" id="date" name="tanggal_keluar" value="{{$transaksi->tanggal_keluar}}" disabled required>
                </div>
                <div class="mb-3 ">
                    <label for="maksimal" class="form-label"> <t>Total Harga</t></label>
                    <input type="number" class="form-control" id="maksimal" name="total" value="{{$transaksi->total}}" required disabled>
                </div>
                <div class="mt-5">
                    <a type="button" href="/laporan" class="btn btn-secondary" style=" width:100px; font-size:15px" data-dismiss="modal"><b>Kembali</b></a>
                    <a type="button" href="/laporan/{{$transaksi->id}}/cetak" class="btn btn-success" style=" width:100px; font-size:15px; margin-left:20px">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                            <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                            <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
                        </svg>
                        <b style="margin-left:5px">Cetak</b>
                    </a>
                </div>
            </form>
            </div>
        </div>
    </div>

@endsection
