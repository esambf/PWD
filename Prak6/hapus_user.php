<?php
include "koneksi.php"; #koneksi ke database akademik
$sql="delete from users where id_user= '$_GET[id]'"; #menghapus user berdasarkan id
mysqli_query($con, $sql); #mengirim query ke database
mysqli_close($con); #menutup koneksi database
header('location:tampil_user.php');
?>