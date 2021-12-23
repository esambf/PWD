<?php
include "koneksi.php"; #koneksi ke database akademik
$sql="select * from mahasiswa order by nim"; #sql untuk mengambil data mahasiswa urut nim
$tampil = mysqli_query($con,$sql); #mengirimkan query ke database
if (mysqli_num_rows($tampil) > 0) { #mengecek apakah ada baris data pada tabel

$response = array(); #variabel response sebagai array
 $response["data"] = array(); 
while ($r = mysqli_fetch_array($tampil)) { #mengambil data sebagai array
 $h['nim'] = $r['nim']; #data nim
 $h['nama'] = $r['nama']; #data nama
 $h['jkel'] = $r['jkel']; #data jenis kelamin
 $h['alamat'] = $r['alamat']; #data alamat
 $h['tgllhr'] = $r['tgllhr']; #data tanggal lahir
 array_push($response["data"], $h); #menyisipkan semua data ke dalam array
 }
 echo json_encode($response); #menampilkan adrray dalam bentuk json
}
else {
 $response["message"]="tidak ada data"; #menampilkan pesan data tidak ada
 echo json_encode($response); #menampilkan adrray dalam bentuk json
 }
?>
