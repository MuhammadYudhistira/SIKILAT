@extends('layouts.app')

@section('title', "Transaksi || Cek In")

@section('bread_crumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-5" style="background-color:white">
        <li class="breadcrumb-item"><a href=" "><i class="fas fa-home mr-2"></i>Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Check In</li>
    </ol>
</nav>
@endsection

@section('content')
    <div class="card pt-3" style="box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);border-radius:10px;">
        <div class="card-body" style="padding:10px">
            <div  align="center" style="margin-bottom:10px">
                <t style="font-size:30px;">Check In Kamar {{$kamar->nomor}}</t>
            </div>

            <form action="/transaksi/{{$kamar ->id}}/" method="post" class="mb-5">
                @csrf
                <div class="mb-3" hidden>
                    <label for="status" class="form-label" ><t>id_kamar</t></label>
                    <input type="text" class="form-control" id="status" placeholder="Masukkan nama" name="kamar_id" value="{{$kamar->id}}" required>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label" ><t>Nama Tamu</t></label>
                    <input type="text" class="form-control" id="status" placeholder="Masukkan nama" name="nama" required>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label" ><t>Nik Tamu</t></label>
                    <input type="text" class="form-control" id="status" placeholder="Masukkan nik" name="nik" required>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label" ><t>Asal Instansi</t></label>
                    <input type="text" class="form-control" id="status" placeholder="Masukkan Asal instansi" name="instansi" required>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label" ><t>Nomor HP</t></label>
                    <input type="text" class="form-control" id="status" placeholder="Masukkan No HP" name="nohp" required>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label" ><t>Email</t></label>
                    <input type="text" class="form-control" id="status" placeholder="Masukkan Email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label" ><t>Jumlah Hari</t></label>
                    <div class="row">
                    <div class="col-md-1 col-sm-12" >
                        <div>
                            <t>Dari</t>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12" >
                        <input type="date" id="date" name="tanggal_masuk" value="{{ now()->format('Y-m-d') }}" disabled>
                        <input type="date" id="date" name="tanggal_masuk" value="{{ now()->format('Y-m-d') }}" hidden>
                    </div>
                    <div class="col-md-1 col-sm-12" >
                        <div>
                            <t>Sampai</t>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12" >
                        <input type="date" id="date" name="tanggal_keluar">
                    </div>
                </div>
                <br><br>
                <button type="submit"  class="btn btn-primary px-3"><b>Check In</b> </button>
            </form>
        </div>
    </div>
@endsection