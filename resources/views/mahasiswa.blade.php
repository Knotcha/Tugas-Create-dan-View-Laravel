<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>mahasiswa</title>
</head>
<body>
  <h1>Table Mahasiswa</h1>

  <a href="/mahasiswa/create" class="button">Tambah Mahasiswa</a>

<center>
  <table border="1" style ="border-colllapse: collapse; text-align:center">
    <thead style="background-color: yellow">
      <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama Mahasiwa</th>
        <th>Nama Prodi</th>
        <th>Tanggal Lahir</th>
        <th>JK</th>
        <th>Alamat</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = $data->firstItem() ?>
      @foreach ($data as $item)
      <tr>
        <td>{{ $i }}</td>
        <td>{{ $item->nim }}</td>
        <td>{{ $item->nama_mahasiswa }}</td>
        <td>{{ $item->jurusan }}</td>
        <td>{{ $item->tgl_lahir }}</td>
        <td>{{ $item->jk }}</td>
        <td>{{ $item->alamat }}</td>
        
      </tr>
      <?php $i++ ?>
      @endforeach
    </tbody>
  </table>
</center>