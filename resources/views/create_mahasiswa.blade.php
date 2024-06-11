<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>tambah mahasiswa</title>
</head>
<body>
  <h1> Form Mahasiswa</h1>
  <hr>


  <form action="/mahasiswa" method="POST">

    @csrf
  <table>
    <tr>
      <th style="text-align: left">
        <label for="">NIM</label>
      </th>
        <td>:</td>
        <td>
          <input type="number" name="nim">
        </td>
      
    </tr>
    <tr>
      <th style="text-align: left;">
        <label for="">Nama Mahasiswa</label>
      </th>
        <td>:</td>
        <td>
          <input type="text" name="nama_mahasiswa">
        </td>
      
    </tr>
    <tr>
      <th style="text-align: left;">
        <label for="">Nama Prodi</label>
      </th>
        <td>:</td>
        <td>
          <input type="text" name="jurusan">
        </td>
      
    </tr>
    <tr>
    <tr>
      <th style="text-align: left">
        <label for="">Tanggal Lahir</label>
      </th>
      <td>:</td>
      <td>
        <input type="date" name="tgl_lahir" id="">
      </td>
    </tr>
    <tr>
      <th style="text-align: left;">Jenis Kelamin</th>
      <td>:</td>
      <td>
        <select name="jk" id="">
          <option value="l">Laki Laki</option>
          <option value="p">Perempuan</option>
        </select>
      </td>
    </tr>
    <tr>
      <th style="text-align: left">Alamat</th>
      <td>:</td>
      <td>
        <textarea name="alamat" id="" cols="30" rows="10"></textarea>
      </td>
    </tr>
    <tr>
      <td colspan="3">
        <button style="width: 100%" type="submit">Simpan</button>
      </td>
    </tr>
  </table>

</form>

  
  
  
  
  
  
</body>
</html>