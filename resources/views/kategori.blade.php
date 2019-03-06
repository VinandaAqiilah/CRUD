<!DOCTYPE html>
<html>
<head>
    <title>Vinanda Aqiilah Suryani</title>
</head>
<style>
body {
    background-color: pink
}
</style>
<br> 
<center>
<h2> Daftar Kategori Film </h2>
</center>

<a href="kategori/tambah"> + Tambah Data</a>

<br/>
<br/>

<table border=1>
  <tr>
  <th>ID</th>
  <th>Nama Kategori</th>
  <th>Slug</th>
  <th>Tanggal Input Data</th>
  <th>Opsi</th></tr>
  @foreach($kategori as $kategori)
    <tr>
      <td>{{$kategori->id}}</td>
      <td>{{$kategori->nama_kategory}}</td>
      <td>{{$kategori->slug}}</td>
      <td>{{$kategori->tgl_input_data}}</td>
      <td><a href="">Lihat</a> | <a href="">Edit</a> | <a href="">Hapus</a></td>
    </tr>
  @endforeach
</table>
</body>
</html>