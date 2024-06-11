<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Index</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .judul {
      font-style: italic;
    }
    .jumbotron-custom {
      background-color: #f8f9fa;
      padding: 2rem 1rem;
    }
    .btn-custom {
      background-color: #4CAF50;
      color: white;
    }
    .btn-custom:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="jumbotron jumbotron-custom text-center">
      <h1 class="display-4 text-danger">Selamat Datang di Project Saya</h1>
      <h2 class="judul">{{$mahasiswa}}</h2>
      <h2 class="judul1">Sistem Informasi 5 (2022)</h2>
      <p class="lead">
        <b>UINSU</b> (Universitas Islam Negeri Sumatera Utara) Fakultas Sains dan Teknologi
      </p>
      <!-- Tambahkan tombol untuk menuju ke halaman mahasiswa -->
      <a href="/mahasiswa" class="button">Table Mahasiswa</
    </div>
  </div>

  
</body>
</html>
