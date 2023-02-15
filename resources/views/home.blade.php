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
</nav>
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

            {{-- <div class="w3-dropdown-hover">
                <div class="btn btn-light">
                    <b style="color:#8C8C8C">Kamar Standar</b>
                    <i class="fa fa-caret-down"></i>
                </div>
                <div class="w3-dropdown-content w3-bar-block">
                    <form action="/">
                    @foreach ($tipe as $t)
                    <input type="text" class="form-control" {{$t->nama}}" name="search" value="{{$t->nama}}">
                    @endforeach
                    <button class="w3-bar-item w3-button" type="submit">Kamar {{$t->nama}}</button>
                    </form>
                </div>
            </div> --}}
            <form action="/">
            <div class="w3-dropdown-hover">
                    <select class="form-select" name="search">
                        <div class="w3-dropdown-content w3-bar-block">
                        {{-- <option selected hidden >{{request('search')}}</option> --}}
                        <option value="">All</option>
                        @foreach ($tipe as $t)
                        <option value="{{$t->id}}">{{$t->nama}}</option>
                        @endforeach
                        </div>
                    </select>
                </div>
                <button class="btn btn-success " type="submit">Search</button>
            </form>

            <i class="fas fa-circle icon" aria-hidden="true" style="margin-left:100px; color:#4FCF43"></i>
            <b style="color:#013555">Kamar Kosong</b>

            <i class="fas fa-circle icon" aria-hidden="true" style="margin-left:30px; color:#FF5959"></i>
            <b style="color:#013555">Kamar Terisi</b>
        </div>

        <br>
        <!-- kamar-kamar -->
        @foreach ($kamar as $k)
                {{-- @if($k->tipe_id == 2) --}}
                <button class="btn btn-primary m-2"  data-toggle="modal" data-target="#kamar{{$k->id}}"
                @if($k->status == 1)
                class="btn btn-db"
                @else
                class="btn btn-db" @disabled(true)
                @endif>
                {{-- <a href=" "></a> --}}
                    <b style="font-size:20px" >{{$k->nomor}}</b>
                </button>
                {{-- @endif --}}

        <!-- Modal -->
        <div class="modal fade" id="kamar{{$k->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content"  align="center" style="background-color:#013555">
                    <b class="modal-title" id="exampleModalLongTitle" style="color:white; font-size: 30px; text-align:center ">Kamar {{$k->nomor}}</b>
                    <div>
                        <button type="button" class="btn btn-label" data-dismiss="modal" style="width:100px ; height:20px; padding:0px">
                            <b style="font-size:10px"> {{$k->maksimal}} Orang </b>
                        </button>
                        <button type="button" class="btn btn-label" data-dismiss="modal" style="width:100px ; height:20px; padding:0px">
                            <b style="font-size:10px"> {{$k->tipe->harga}} </b>
                        </button>
                        <button type="button" class="btn btn-label" data-dismiss="modal" style="width:100px ; height:20px; padding:0px">
                            <b style="font-size:10px"> {{$k->tipe->nama}} </b>
                        </button>
                    </div>
                    <br><br>
                    <div style="margin-bottom:10px; ">
                        <button type="button" class="btn btn-secondary" style="margin-right:200px; width:100px; font-size:15px" data-dismiss="modal"><b>Kembali</b> </button>
                        <a type="button" href="/transaksi/{{$k->id}}/checkin" style="width:100px;font-size:15px"   class="btn btn-primary"><b>Cek In</b> </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

<!-- pop up kamar -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
