@extends('layouts.app')

@section('title', "Transaksi || Cek In")

@section('bread_crumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-5" style="background-color:white">
        <li class="breadcrumb-item"><a href=" "><i class="fas fa-users mr-2"></i>Data Tamu</a></li>
        <li class="breadcrumb-item active" aria-current="page">Check Out Tamu {{$tamu->Transaksi->kamar->nomor}}</li>
    </ol>
</nav>
@endsection

@section('content')
    <div class="card pt-1" style="box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);border-radius:10px;">
        <div class="card-body px-5">
            <div  align="center" style="margin-bottom:10px">
                <t style="font-size:30px;">Check Out Kamar {{$tamu->Transaksi->kamar->nomor}}</t>
            </div>

            <form action="" method="get" class="mb-2 ">
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
                <div class="mb-5 ">
                    <label for="maksimal" class="form-label"> <t>Total Harga</t></label>
                    <input type="number" class="form-control" id="maksimal" name="total" value="{{$tamu->Transaksi->total}}" required disabled>
                </div>
                <div class="mt-4">
                    <a type="button" href="/tamu" class="btn btn-secondary" style=" width:100px; font-size:15px; margin-right:10px" data-dismiss="modal"><b>Kembali</b></a>
                    <a type="button" id="cekout" data-toggle="modal" data-target="#checkout"  class="btn btn-danger px-3" style="font-size:15px"><b>Check Out</b></a>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="checkout" tabindex="-1" role="dialog" aria-labelledby="checkoutTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content"  align="center" style="background-color:#013555; padding:10px; width:80%">
                                <b class="modal-title" id="checkoutTitle" style="color:white; font-size: 30px; text-align:center ">Warning!!!</b>
                                <br>
                                <div>
                                    <t style="color:white;">Apakah anda yakin akan melakukan Check Out??</t>
                                </div>
                                <div style="margin-top:20px;margin-buttom:30px; ">
                                    <button type="button" class="btn btn-secondary" style="margin-right:150px; width:100px; font-size:15px" data-dismiss="modal"><b>Batal</b> </button>
                                    <a type="button" href="/tamu/{{$tamu->id}}/destroy" style="width:100px;font-size:15px"   class="btn btn-danger"><b>Check Out</b> </a>
                                </div>
                        </div>
                    </div>
                </div>
            </form>
            

    </div>

@endsection
<!-- pop up kamar -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>