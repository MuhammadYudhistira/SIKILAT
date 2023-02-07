@extends('layouts.app')

@section('title', "Daftar Tamu")



@section('content')

<body>
    <h3>Check-in</h3>
    <form action="/transaksi/{{$kamar ->id}}/" method="post" class="mb-5">
        @csrf
        <div class="mb-3">
            <label for="customer_id" class="form-label">Tamu :</label>

            <select class="form-select" aria-label="Default select example" id="tipe_id" name="tipe_id">
                <option hidden>Pilih Nama Tamu</option>
                @foreach ($tamu as $t)
                <option value="{{ $t->id }}">{{ $t->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Kamar :</label>
            <input type="text" class="form-control" id="kamar_id" value="{{$kamar->nomor}}" disabled>
            <input type="text" class="form-control" id="kamar_id" name="kamar_id" value="{{$kamar->id}}" hidden>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label" >Tanggal Masuk :</label>

            <input type="text" class="form-control" id="status" placeholder="Masukkan harga produk" name="alamat" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label" >Tanggal Keluar :</label>

            <input type="text" class="form-control" id="status" placeholder="Masukkan harga produk" name="alamat" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label" >Jumlah Hari :</label>

            <input type="text" class="form-control" id="status" placeholder="Masukkan harga produk" name="quantity" required>
        </div>

        <div class="mb-3">
            <label for="maksimal" class="form-label">Total Harga : </label>
            <input type="number" class="form-control" id="maksimal" placeholder="Masukkan harga produk" name="total" value="{{$kamar->tipe->harga}}" required disabled>
        </div>


        <div class="mb-3">
            <button type="submit" class="btn btn-success px-3">Kirim</button>
        </div>
    </form>
</body>
</html>
@endsection
