<?php
    session_start(); #memulai session
    $random_alpha = md5(rand()); #membuat integer random kemudian di enkripsi md5
    $captcha_code = substr($random_alpha, 0, 6); #mengambil string 6 karakter saja
    $_SESSION["captcha_code"] = $captcha_code; #variabel session berupa captcha
    $target_layer = imagecreatetruecolor(70, 30); #variabel untuk membuat gambar menggunakan gd librari dengan ukuran 70 X 30
    $captcha_background = imagecolorallocate($target_layer, 255, 160, 119); #variabel berisi warna untuk background
    imagefill($target_layer,0,0,$captcha_background); #meletakan warna pada target layer
    $captcha_text_color = imagecolorallocate($target_layer, 0, 0, 0); #variabel berisi warna untuk text
    imagestring($target_layer, 5, 5, 5, $captcha_code, $captcha_text_color); #menampilkan teks ke gambar
    header("Content-type: image/jpeg"); #redirect ke gambar
    imagejpeg($target_layer); #menampilkan gambar (backgorund dan text)
