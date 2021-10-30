<html>

 <head>
 <style>
 .error {color: #FF0000;}
 </style>
 </head>

 <body>
 <?php
 // define variables and set to empty values
 $nimErr = $namaErr = $prodiErr = $emailErr = $genderErr = "";
 $nim = $nama = $prodi = $email = $gender = $comment =  "";
 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {

if (empty($_POST["nim"])) {
    $nimErr = "NIM harus diisi";
}else {
    $nim = test_input($_POST["nim"]);


if (!filter_var($nim, FILTER_VALIDATE_INT)) {
    $nimErr = "NIM hanya angka";
}
}

if (empty($_POST["nama"])) {
    $namaErr = "Nama harus diisi";
}else {
    $nama = test_input($_POST["nama"]);
}

if (empty($_POST["prodi"])) {
    $prodiErr = "Prodi harus diisi";
}else {
    $prodi = test_input($_POST["prodi"]);
}

if (empty($_POST["email"])) {
    $emailErr = "Email harus diisi";
}else {
    $email = test_input($_POST["email"]);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Email tidak sesuai format";
}
}

if (empty($_POST["comment"])) {
    $comment = "";
}else {
    $comment = test_input($_POST["comment"]);
}

if (empty($_POST["gender"])) {
    $genderErr = "Gender harus dipilih";
}else {
    $gender = test_input($_POST["gender"]);
}
}

 function test_input($data) {
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
 }
 ?>
 <h2>Posting Komentar </h2>

<p><span class = "error">* Harus Diisi.</span></p>

<form method = "post" action = "<?php
echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<table>

<tr>
<td>NIM:</td>
<td><input type = "text" name = "nim">
<span class = "error">* <?php echo $nimErr;?></span>
</td>
</tr>

<tr>
<td>Nama:</td>
<td><input type = "text" name = "nama">
<span class = "error">* <?php echo $namaErr;?></span>
</td>
</tr>

<tr>
<td>Prodi:</td>
<td><input type = "text" name = "prodi">
<span class = "error">* <?php echo $prodiErr;?></span>
</td>
</tr>

<tr>
<td>E-mail: </td>
<td><input type = "text" name = "email">
<span class = "error">* <?php echo $emailErr;?></span>
</td>
</tr>

<tr>
<td>Komentar:</td>
<td> <textarea name = "comment" rows = "5" cols = "40"></textarea></td>
</tr>

<tr>
<td>Gender:</td>
<td>
<input type = "radio" name = "gender" value = "L">Laki-Laki
<input type = "radio" name = "gender" value = "P">Perempuan
<span class = "error">* <?php echo $genderErr;?></span>
</td>
</tr>
<td>
<input type = "submit" name = "submit" value = "Submit">
</td>
</table>
</form>


<table width='80%' border=1> <!-- tabel untuk menampilkan sejumlah data -->
    <tr>
    <th>NIM</th> <th>Nama</th><th>Prodi</th> <th>Email</th><th>Komen</th> <th>Gender</th> <!-- label -->
    </tr>
<?php

    echo "<tr>";
    echo "<td>".$nim."</td>"; 
    echo "<td>".$nama."</td>"; 
    echo "<td>".$prodi."</td>"; 
    echo "<td>".$email."</td>";
    echo "<td>".$comment."</td>";
    echo "<td>".$gender."</td>";

?>
</table>

 </body>
</html>
