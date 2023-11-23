<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah siswa</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css2/data.css ')}}">
</head>
<body>
    <!-- resources/views/nama_view.blade.php -->
    <div class="container mt-5">
    <section>
    <a href="{{route('daftarsiswa')}}" class="btn btn-primary mb-3">Kembali</a>
    </section>
<form method="post" action="{{ route('buatsiswa') }}">
    @csrf

    @error('nis')
    <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
    @enderror
    <label for="nis">nis:</label>
    <input type="text" name="nis" required>
    <br>
    <label for="nama">nama:</label>
    <input type="text" name="nama" required>
<br>
    <label for="alamat">alamat:</label>
    <input type="text" name="alamat" required>
<br>
    <label for="jenis_kelamin">jenis kelamin:</label>
    <select name="jenis_kelamin" id="" required>
        <option value="pria">Pria</option>
        <option value="wanita">Wanita</option>
    </select>
<br>
    <label for="tanggal_lahir">tanggal lahir:</label>
    <input type="date" name="tanggal_lahir" required>
<br>
    <!-- Tambahkan input lainnya sesuai kebutuhan -->

    <button type="submit" onclick="return confirm('Apakah anda yakin ingin menambahkan data ini?')" class="btn btn-primary">Simpan</button>
</form>

    </div>
</body>
</html>