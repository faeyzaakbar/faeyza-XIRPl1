<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit siswa</title>
</head>
<body>
    <!-- resources/views/user/edit.blade.php -->

<form method="POST" action="{{ route('updatesiswa', ['id' => $siswa->id]) }}">
    @csrf
    @method('PUT')

    <label for="nis">nis:</label>
    <input type="text" name="nis" id="nis" value="{{ $siswa->nis }}" required>

    <label for="nama">nama:</label>
    <input type="text" name="nama" id="nama" value="{{ $siswa->nama }}" required>

    <label for="jenis_kelamin">jenis kelamin:</label>
    <input type="text" name="jenis_kelamin" id="jenis_kelamin" value="{{ $siswa->jenis_kelamin }}" required>

    <label for="alamat">alamat:</label>
    <input type="text" name="alamat" id="alamat" value="{{ $siswa->alamat }}" required>

    <label for="tanggal_lahir">tanggal lahir:</label>
    <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}" required>

    <!-- Tambahkan input untuk kolom lainnya -->

    <button type="submit">Perbarui</button>
</form>

</body>
</html>