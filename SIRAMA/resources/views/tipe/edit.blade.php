<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit TIpe Kamar</title>
</head>
<body>
    <form action="/tipe/{{ $tipe ->id }}" method="post" class="mb-5" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama:</label>

            <input type="text" class="form-control" id="nama" placeholder="Masukkan nama produk" name="nama" value="{{$tipe ->nama}}">
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga:</label>

            <input type="number" class="form-control" id="harga" placeholder="Masukkan harga produk" name="harga" value="{{$tipe ->harga}}" min="1">
        </div>

        {{-- <div class="mb-3">
            <label for="jumlah" class="form-label">Stok : </label>

            <input type="number" class="form-control" id="stok" placeholder="Masukkan harga produk" name="stok" value="{{$barang ->stok}}" min="1">
        </div> --}}
        <div class="mb-3">
            <button type="submit" class="btn btn-success px-3">Kirim</button>
        </div>
    </form>
</body>
</html>
