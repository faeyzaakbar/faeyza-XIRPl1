<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah siswa</title>
</head>
<body>
    <!-- resources/views/nama_view.blade.php -->

<form method="post" action="{{ route('buatsiswa') }}">
    @csrf
    <label for="nis">nis:</label>
    <input type="text" name="nis" required>

    <label for="nama">nama:</label>
    <input type="text" name="nama" required>

    <label for="alamat">alamat:</label>
    <input type="text" name="alamat" required>

    <label for="jenis_kelamin">jenis kelamin:</label>
    <input type="text" name="jenis_kelamin" required>

    <label for="tanggal_lahir">tanggal lahir:</label>
    <input type="date" name="tanggal_lahir" required>

    <!-- Tambahkan input lainnya sesuai kebutuhan -->

    <button type="submit">Simpan</button>
</form>

</body>
</html>