<?php
require_once "koneksi.php"; #koneksi ke database akademik
$sql = "select * from mahasiswa"; #sql untuk mengambil data dari tabel mahasiswa
$query = mysqli_query($con,$sql); #mengirimkan query ke database
while ($row = mysqli_fetch_assoc($query)) { #menampilkan masing masing atribut dengan perulangan
 $data[] = $row;
}
header('content-type: application/json'); #data dalam bentuk json
echo json_encode($data); #mengubah array menjadi json
mysqli_close($con); #menutup koneksi
?>