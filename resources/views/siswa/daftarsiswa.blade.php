<?php 
$iteration = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar siswa</title>
</head>
<body>
    <button><a href="{{route('tambahsiswa')}}">tambah</a></button>
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
            <td><a href="{{ route('editsiswa', ['id' => $datasiswa->id]) }}">Edit</a>
        <form action="{{route('deletesiswa', ['id' => $datasiswa->id])}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('yakin menghapus data ini ?')">Hapus</button>           
        </form></td>
            </tr>
            <?php $iteration += 1 ?>
            @endforeach
        </tbody>
    </table>
</body>
</html>