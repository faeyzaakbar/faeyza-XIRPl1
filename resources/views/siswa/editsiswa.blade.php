<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css2/data.css ')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"> 
    <title>edit siswa</title>
</head>
<body>
    <!-- resources/views/user/edit.blade.php -->
    <div class="container">
    <section>
        <a href="{{route('daftarsiswa')}}" class="btn btn-primary mb-3">Kembali</a>
    </section>
    @if($errors->any())
    @foreach($errors->all() as $item)
    <div class="alert alert-danger" role="alert">
    {{$item}}
    </div>
    @endforeach
    @endif

<form method="POST" action="{{ route('updatesiswa', ['id' => $siswa->id]) }}">
    @csrf
    @method('PUT')

    <label for="nis">nis:</label>
    <input type="text" name="nis" id="nis" value="{{ $siswa->nis }}" required>
    <br>
    <label for="nama">nama:</label>
    <input type="text" name="nama" id="nama" value="{{ $siswa->nama }}" required>
<br>
    <label for="jenis_kelamin">jenis kelamin:</label>
    <select name="jenis_kelamin" id="" required>
        <option value="pria">Pria</option>
        <option value="wanita">Wanita</option>
    </select>
    <br>
    <label for="alamat">alamat:</label>
    <input type="text" name="alamat" id="alamat" value="{{ $siswa->alamat }}" required>
<br>
    <label for="tanggal_lahir">tanggal lahir:</label>
    <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}" required>

    <!-- Tambahkan input untuk kolom lainnya -->
<br>
    <button type="submit" onclick="return confirm('Apakah anda yakin ingin mengedit data ini?')" class="btn btn-primary">Perbarui</button>
</form>

    </div>
</body>
</html>