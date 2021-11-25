<?php
echo "<h2>Login</h2> #judul
<form method=post action=cek_login.php> #form dengan aksi ke cek_login.php untuk pemrosesannya
<table>
<tr><td>Username</td><td> : <input name='id_user' type='text'></td></tr> #input username
<tr><td>Password</td><td> : <input name='password' type='text'></td></tr> #input password
<tr><td colspan=2><input type='submit' value='LOGIN'></td></tr> #tombol submit
</table>
</form>";
?>