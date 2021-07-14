<?php
include "koneksi.php";
?>
 
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Belajar Form Input Data</title>
</head>
<body>
 
<h1>Belajar Membuat Web Input Data</h1>
 
<p>Menampilkan isi database Mahasiswa Politeknik Kampar </p>
 
 
<table border="1">
<tr>
<th>NIM</th>
<th>Nama</th>
<th>Tanggal Lahir</th>
<th>Tempat Lahir</th>
<th>Jurusan</th>
<th>Tahun Masuk</th>
 
</tr>
 
<?php
 
// menampilkan seluruh isi database
$query ="select * from data_mahasiswa";
$hasil = mysqli_query($koneksi, $query);
 
while($data = mysqli_fetch_array($hasil))
{
  echo "<tr>";
  echo "<td>$data[nim]</td>";
  echo "<td>$data[nama]</td>";
  echo "<td>$data[tgl_lhr]</td>";
  echo "<td>$data[tempat_lahir]</td>";
  echo "<td>$data[jurusan]</td>";
  echo "<td>$data[tahun_masuk]</td>";
  echo "</tr>";
}
?>
</table>
</body>
</html>