<?php
$url = "http://localhost/PRAKTIKUM%20PWD/Prak10/getdatamhs.php";  #variabel url memuat file getdatamhs yang berisi json
$client = curl_init($url); #inisialisasi sesi baru untuk memindai data variabel $url
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1); #pengaturan opsi-opsi curl
$response = curl_exec($client); #mengeksekusi query curl
$result = json_decode($response); #mengubah json ke array
foreach ($result as $r) { #menampilkan sejumlah data
 echo "<p>";
 echo "NIM : " . $r->nim . "<br />"; #data nim
 echo "Nama : " . $r->nama . "<br />"; #data nama
 echo "jenis kel : " . $r->jkel . "<br />"; #data jenis kelamin
 echo "Alamat : " . $r->alamat . "<br />"; #data alamat
 echo "Tgl Lahir : " . $r->tgllhr . "<br />"; #data tanggal lahir
 echo "</p>";
}
