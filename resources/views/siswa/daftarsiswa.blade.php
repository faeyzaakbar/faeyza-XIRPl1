<?php 
$iteration = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar siswa</title>
    <link rel="stylesheet" href="{{asset('css2/data.css ')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <div class="container" >
        <section class="mb-4">
       <a href="{{route('tambahsiswa')}}" class="btn btn-primary text-white">Tambah</a>

        </section>
    @if (session('success'))
    <div class="alert alert-success" role="alert">
{{session('success')}}
</div>

    @endif
    <table border='1' cellpadding='8'>
        <thead>
            <th>NO</th>
            <th>nis</th>
            <th>nama</th>
            <th>alamat</th>
            <th>jenis kelamin</th>
            <th>tanggal lahir</th>
            <th>aksi</th>
        </thead>
        <tbody>
            @foreach ($siswa as $datasiswa)
            <tr>
            <td>{{$iteration}}</td>
            <td>{{$datasiswa->nis}}</td>
            <td>{{$datasiswa->nama}}</td>
            <td>{{$datasiswa->alamat}}</td>
            <td>{{$datasiswa->jenis_kelamin}}</td>
            <td>{{$datasiswa->tanggal_lahir}}</td>
            <td><a href="{{ route('editsiswa', ['id' => $datasiswa->id]) }}" class="btn btn-warning">Edit</a>
        <form action="{{route('deletesiswa', ['id' => $datasiswa->id])}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('yakin menghapus data ini ?')" class="btn btn-danger">Hapus</button>           
        </form></td>
            </tr>
            <?php $iteration += 1 ?>
            @endforeach
        </tbody>
    </table>
    </div>
</body>
</html>