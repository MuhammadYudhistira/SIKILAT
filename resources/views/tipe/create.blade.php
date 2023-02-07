<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Tipe</title>
</head>
<body>
    <h3>Form Create Tipe Kamar</h3>
    <form action="/tipe" method="post" class="mb-5">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama :</label>
            <input type="text" class="form-control" id="nomor" placeholder="Masukkan Nama" name="nama">
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Harga :</label>

            <input type="number" class="form-control" id="status" placeholder="Masukkan Harga" name="harga" min="1">
        </div>
        <br>
        <div class="mb-3">
            <button type="submit" class="btn btn-success px-3">Kirim</button>
        </div>
    </form>
</body>
</html>
