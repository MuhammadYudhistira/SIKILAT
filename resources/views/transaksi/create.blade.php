@extends('layouts.app')

@section('title', "Daftar Tamu")



@section('content')

<body>
    <h3>Transaksi</h3>
    <form action="/transaksi/{{$kamar ->id}}/" method="post" class="mb-5">
        @csrf
        <div class="mb-3">
            <label for="customer_id" class="form-label">Nama Tamu :</label>

            <select class="form-select" aria-label="Default select example" id="tipe_id" name="tipe_id">
                <option hidden>Pilih Tipe Kamar</option>
                @foreach ($tipe as $t)
                <option value="{{ $t->id }}">{{ $t->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap :</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan nama produk" name="nama" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label" >Alamat :</label>

            <input type="text" class="form-control" id="status" placeholder="Masukkan harga produk" name="alamat" required>
        </div>

        <div class="mb-3">
            <label for="maksimal" class="form-label">Nohp : </label>
            <input type="text" class="form-control" id="maksimal" placeholder="Masukkan harga produk" name="nohp" required
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status :</label>
            <select class="form-select" aria-label="Default select example" id="status" name="status" required>
                <option hidden>Pilih Status</option>
                <option value="umum">umum</option>
                <option value="peserta">peserta</option>
            </select>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-success px-3">Kirim</button>
        </div>
    </form>
</body>
</html>
@endsection
