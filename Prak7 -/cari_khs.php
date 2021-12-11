<?php
include 'koneksi.php'; #koneksi ke database akademik
?>
<h3>Form Pencarian DATA KHS Dengan PHP </h3> <!-- judul -->
<form action="" method="get"> <!--form untuk kolom pencarian dengan method GET-->
<label>Cari :</label>
<input type="text" name="cari"> <!--input data yang ingin dicari -->
<input type="submit" value="Cari"> <!-- tombol submit -->
</form>
<?php
if(isset($_GET['cari'])){ #kondisi apakah ada input dari kolom pencarian
$cari = $_GET['cari']; #variabel cari untuk menyimpan kata yang dicari
echo "<b>Hasil pencarian : ".$cari."</b>"; #menampilkan kata yang dicari
}
?>
<table border="1"> <!-- tabel untuk hasil pencarian -->
<tr>
<th>No</th> <!-- label nomor -->
<th>NIM</th> <!-- label nim -->
<th>Nama</th> <!-- label matakuliah -->
<th>Kode MK</th> <!-- label matakuliah -->
<th>Nama MK</th> <!-- label matakuliah -->
<th>Nilai</th> <!-- label nilai -->
</tr>
<?php
if(isset($_GET['cari'])){ #kondisi apakah ada input dari kolom pencarian
$cari = $_GET['cari']; #variabel cari untuk menyimpan kata yang dicari
$sql="select * from khs JOIN mahasiswa ON khs.nim = mahasiswa.nim JOIN matakuliah ON khs.kode_mk = matakuliah.kode_mk where mahasiswa.nim like'%".$cari."%'"; #sql untuk memilih/mengambil data dari database bedasarkan kata yang dicari dengan fungsi like
$tampil = mysqli_query($con,$sql); #variabel tampil mengirim perintah query ke database
}else{
$sql="select * from khs JOIN mahasiswa ON khs.nim = mahasiswa.nim JOIN matakuliah ON khs.kode_mk = matakuliah.kode_mk"; #sql untuk mengambil semua data pada tabel khs join mahasiswa
$tampil = mysqli_query($con,$sql); #variabel tampil mengirim perintah query ke database
}
$no = 1;
while($r = mysqli_fetch_array($tampil)){ #perulangan untuk menampilkan data hasil pencarian
?>
<tr>
<td><?php echo $no++; ?></td> <!-- menampilkan nomor -->
<td><?php echo $r['nim']; ?></td> <!-- menampilkan nim -->
<td><?php echo $r['nama']; ?></td> <!-- menampilkan nama -->
<td><?php echo $r['kode_mk']; ?></td> <!-- menampilkan kode matakuliah -->
<td><?php echo $r['nama_mk']; ?></td> <!-- menampilkan nama matakuliah -->
<td><?php echo $r['nilai']; ?></td> <!-- menampilkan nilai -->
</tr>
<?php } ?>
</table>