<?php
include "koneksi.php"; #koneksi ke database akademik
header('Content-Type: text/xml'); #menampilkan sebagai xml
$query = "SELECT * FROM mahasiswa"; #sql untuk mengambil data mahasiswa
$hasil = mysqli_query($con,$query); #mengirimkan query ke database
$jumField = mysqli_num_fields($hasil); #variebel untuk mengecek kolom data pada tabel
echo "<?xml version='1.0'?>"; #versi xml yang digunakann
echo "<data>"; #data
while ($data = mysqli_fetch_array($hasil)) #mengambil data hasil sebagai array
{
 echo "<mahasiswa>"; #tag data mahasiswa
 echo"<nim>",$data['nim'],"</nim>"; #data nim
 echo"<nama>",$data['nama'],"</nama>"; #data nama
 echo"<jkel>",$data['jkel'],"</jkel>"; #data jenis kelamin
 echo"<alamat>",$data['alamat'],"</alamat>"; #data alamat
 echo"<tgllhr>",$data['tgllhr'],"</tgllhr>"; #data tanggal lahir
 echo "</mahasiswa>"; #tag penutup
}
echo "</data>"; 
?>