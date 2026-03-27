<?php
session_start();
echo '<h1>Selamat Datang</h1><br>';
echo '<b>Anda Berhasil Login</b><br>';
echo 'Nama Anda : '.$_SESSION['nama'].'<br>';
echo 'Email Anda : '.$_SESSION['email'].'<br>';

?>