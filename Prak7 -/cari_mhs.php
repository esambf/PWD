<?php
include 'koneksi.php'; #koneksi ke database akademik
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
echo "<b>Hasil pencarian : ".$cari."</b>"; #menampilkan kata yang dicari
}
?>
<table border="1"> <!-- tabel untuk hasil pencarian -->
<tr>
<th>No</th> <!-- label nomor -->
<th>Nama</th> <!-- label nama -->
</tr>
<?php
if(isset($_GET['cari'])){ #kondisi apakah ada input dari kolom pencarian
$cari = $_GET['cari']; #variabel cari untuk menyimpan kata yang dicari
$sql="select * from mahasiswa where nama like'%".$cari."%'"; #sql untuk memilih/mengambil data dari database bedasarkan kata yang dicari dengan fungsi like
$tampil = mysqli_query($con,$sql); #variabel tampil mengirim perintah query ke database
}else{ #jika tidak ada input
$sql="select * from mahasiswa"; #sql untuk mengambil semua data pada tabel mahasiswa
$tampil = mysqli_query($con,$sql); #variabel tampil mengirim perintah query ke database
}
$no = 1; 
while($r = mysqli_fetch_array($tampil)){ #perulangan untuk menampilkan data hasil pencarian
?>
<tr>
<td><?php echo $no++; ?></td> <!-- menampilkan nomor -->
<td><?php echo $r['nama']; ?></td> <!-- menampilkan nama hasil pencarian -->
</tr>
<?php } ?>
</table>