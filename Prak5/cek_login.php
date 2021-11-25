<?php
include "koneksi.php"; #koneksi ke database akademik
$id_user = $_POST['id_user']; #variabel id_user untuk menerima data dari form login menggunakan metode post
$pass=md5($_POST['password']); #variabel pass untuk menerima data dari form login menggunakan metode post dan di enkripsi dengan md5
$sql="SELECT * FROM users WHERE id_user='$id_user' AND password='$pass'"; #mengambil data dengan username dan password yang diinputakan
$login=mysqli_query($con,$sql); #variabel login mengirim perintah query ke database
$ketemu=mysqli_num_rows($login); #variebel ketemu untuk mengecek baris data pada tabel
$r= mysqli_fetch_array($login); #variabel r untuk pengambilan data
if ($ketemu > 0){ #mengecek apakah data login sesuai
 session_start(); #memulai session
 $_SESSION['iduser'] = $r['id_user']; #variabel session berupa array
 $_SESSION['passuser'] = $r['password']; #variabel session berupa array
echo"USER BERHASIL LOGIN<br>"; #keterangan berhasil login
echo "id_user =",$_SESSION['iduser'],"<br>"; #menampilkan username
echo "password=",$_SESSION['passuser'],"<br>"; #menampilkan password
echo "<a href=logout.php><b>LOGOUT</b></a></center>"; #link logout
}
else{ #jika tidak sesuai
echo "<center>Login gagal! username & password tidak benar<br>"; #keterangan username password salah
echo "<a href=form_login.php><b>ULANGI LAGI</b></a></center>"; #ke halaman form login kembali
}
mysqli_close($con); #menutup koneksi database
?>