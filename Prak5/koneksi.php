<?php
$host="localhost"; //variabel host berisi host name phpmyadmin
$username="root"; //variabel username berisi username akun phpmyadmin
$password=""; //untuk password akun phpmyadmin
$databasename="akademik"; //nama database

$con=@mysqli_connect($host,$username,$password,$databasename); //variavel con untuk menghubungkan ke database mysql
if (!$con) { //cek jika tidak terkoneksi
    echo "Error: " . mysqli_connect_error(); //menampilkan keterangan error jika tidak terkoneksi
        exit();
}else { //jika koneksi berhasil
    echo ""; //menampilkan keterangan koneksi berhasil
}
