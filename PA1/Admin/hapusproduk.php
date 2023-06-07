<?php
 $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotoproduk = $pecah['images'];
if (file_exists("../images/$images"))
{
    unlink("../images/$images");
}


$koneksi->query("DELETE FROM produk WHERE id_produk='$_GET[id]'");

echo"<script>alert('yakin hapus produk?');</script>";
echo"<script>location='indexadmin.php?halaman=produk';</script>";
?>