<?php
session_start();
session_destroy();


// menampilkan pesan setelah header()
echo "<script>alert('Anda telah logout. Sampai jumpa lagi :)');</script>";
echo "<script>location='../indek.php';</script>";

?>