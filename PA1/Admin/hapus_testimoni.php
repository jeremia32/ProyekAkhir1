<?php
 $ambil = $koneksi->query("SELECT * FROM testimoni WHERE id_testimoni='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotoproduk = $pecah['images'];
if (file_exists("../images/$images"))
{
    unlink("../images/$images");
}


$koneksi->query("DELETE FROM testimoni WHERE id_testimoni='$_GET[id]'");

echo"<script>alert('yakin hapus produk?');</script>";
echo"<script>location='indexadmin.php?halaman=testimonial';</script>";
?>