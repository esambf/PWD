<?php
$url = "http://localhost/PRAKTIKUM%20PWD/Prak10/getdatamhs.php";  #variabel url memuat file getdatamhs yang berisi json
$client = curl_init($url); #inisialisasi sesi baru untuk memindai data variabel $url
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1); #pengaturan opsi-opsi curl
$response = curl_exec($client); #mengeksekusi query curl
$result = json_decode($response); #mengubah json ke array
?>
<h3>Form Pencarian Dengan PHP MAHASISWA</h3> <!-- judul -->
<form action="" method="get"> <!--form untuk kolom pencarian dengan method GET-->
<label>Cari :</label> 
<input type="text" name="cari"> <!--input data yang ingin dicari -->
<input type="submit" value="Cari"> <!-- tombol submit -->
</form>
<?php
if(isset($_GET['cari'])){ #kondisi apakah ada input dari kolom pencarian
$cari = $_GET['cari']; #variabel cari untuk menyimpan kata yang dicari
echo "<b>Hasil pencarian : ".$cari."</b><br>"; #menampilkan kata yang dicari

}
if(isset($_GET['cari'])){
foreach ($result as $r) {
if($cari == ($r->nim)){ #kondisi apakah ada input dari kolom pencarian
$cari = $_GET['cari']; #variabel cari untuk menyimpan kata yang dicari
echo "Nama : " . $r->nama . "<br />"; #data nama
echo "NIM : " . $r->nim . "<br />"; #data nama
}
}
}
   ?>
</table>