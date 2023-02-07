@extends('layouts.app')

@section('title', "Daftar Tamu")



@section('content')

<body>
    <h3>Tambah Kamar</h3>
    <form action="/kamar" method="post" class="mb-5">
        @csrf
        <div class="mb-3">
            <label for="customer_id" class="form-label">Tipe Kamar :</label>

            <select class="form-select" aria-label="Default select example" id="tipe_id" name="tipe_id">
                <option hidden>Pilih Tipe Kamar</option>
                @foreach ($tipe as $t)
                <option value="{{ $t->id }}">{{ $t->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nomor :</label>
            <input type="text" class="form-control" id="nomor" placeholder="Masukkan nama produk" name="nomor">
        </div>

        <div class="mb-3" hidden>
            <label for="status" class="form-label" >Status :</label>

            <input type="number" class="form-control" id="status" placeholder="Masukkan harga produk" name="status" min="1" value="1">
        </div>

        <div class="mb-3">
            <label for="maksimal" class="form-label">Maksimal : </label>
            <input type="number" class="form-control" id="maksimal" placeholder="Masukkan harga produk" name="maksimal" min="1">
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-success px-3">Kirim</button>
        </div>
    </form>
</body>
</html>
@endsection
