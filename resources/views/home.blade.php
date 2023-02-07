@extends('layouts.app')

@section('title', "Dashboard")

@section('bread_crumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-5" style="background-color:white">
        <li class="breadcrumb-item active" aria-current="page" style="margin-top:5px">
            <i class="fas fa-home mr-2" style="color:#013555"></i>
            <b style="font-size:20px; color:#013555">Dashboard</b>
        </li>
    </ol>
{{-- </nav> --}}
@endsection

@section('content')
<div class="row justify-content-center" style="margin-top:0px; margin-bottom:30px; border-radius:10px">
    <div class="card" style="box-shadow: 0 4px 8px 0 #4FCF43;margin:10px;max-width:300px;background:#ffff">
        <div class="row no-gutters" >
            <div class="col-md">
                <div class="card-body" align="center">
                    <b style="color:#013555; font-size:20px; " >Jumlah Kamar Kosong</b>
                    <br>
                    <b style="color:#4FCF43; font-size:50px; ">{{$count}}</b>
                </div>
            </div>
        </div>
    </div>

    <div class="card" style="box-shadow: 0 4px 8px 0 #FF5959;margin:10px;max-width:300px;background:#ffff">
        <div class="row no-gutters" >
            <div class="col-md">
                <div class="card-body" align="center">
                    <b style="color:#013555; font-size:20px; " >Jumlah Kamar Terisi</b>
                    <br>
                    <b style="color:#FF5959; font-size:50px; margin-top::0px ">{{$countisi}}</b>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="card pt-3" style="background-color:#EDEDED;border-radius:10px">
    <div class="card-body">
        <!-- dropdown tipe kamar -->
        <div>
            <button class="dropdown-toggle btn btn-light"  type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <b style="color:#8C8C8C">Kamar Standar</b>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <option class="dropdown-item" type="button">Kamar Standar</option>
                <option class="dropdown-item" type="button">Kamar Deluxe</option>
            </div>
            <i class="fas fa-circle icon" aria-hidden="true" style="margin-left:100px; color:#4FCF43"></i>
            <b style="color:#013555">Kamar Kosong</b>

            <i class="fas fa-circle icon" aria-hidden="true" style="margin-left:30px; color:#FF5959"></i>
            <b style="color:#013555">Kamar Terisi</b>
        </div>

        <br>
        <!-- kamar-kamar -->
        @foreach ($kamar as $k)
                {{-- @if($k->tipe_id == 2) --}}
                <button style=""
                @if($k->status == 1)
                class="btn btn-db"
                @else
                class="btn btn-db" @disabled(true)
                @endif>
                {{-- <a href="/transaksi/{{$k->id}}/new"></a> --}}
                    <a style="font-size:20px" href="/transaksi/{{$k->id}}/tamu">{{$k->nomor}}</a>
                </button>
            {{-- @endif --}}

        @endforeach

    </div>
</div>
@endsection
