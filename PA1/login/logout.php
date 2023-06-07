<?php
// mengaktifkan session php
session_start();

// menghapus semua session
session_destroy();
echo"<script>alert('Anda  telah logout.sampai jumpa lagi :)');</script>";
echo"<script>location='indexadmin.php?halaman=produk';</script>";
// mengalihkan halaman ke halaman login
header("location:../indek.php");
?>