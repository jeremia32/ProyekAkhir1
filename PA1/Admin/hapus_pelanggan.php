<?php
 $ambil = $koneksi->query("SELECT * FROM users WHERE id_akun='$_GET[id]'");
$pecah = $ambil->fetch_assoc();



$koneksi->query("DELETE FROM users WHERE id_akun='$_GET[id]'");

echo"<script>alert('yakin hapus custumer tersebut?');</script>";
echo"<script>location='indexadmin.php?halaman=pelanggan';</script>";
?>