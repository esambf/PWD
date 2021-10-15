<?php
$myDir = "c:/xampp/htdocs/PWD/programupload"; // direktori penyimpanan file
$dir = opendir($myDir); // membuka direktori
echo "Isi folder (klik link untuk download : <br>";
while($tmp = readdir($dir)){
    echo "<a href='$tmp' target='_blank'>$tmp</a><br>"; // menampilkan daftar file pada direktori
}
closedir($dir);
?>