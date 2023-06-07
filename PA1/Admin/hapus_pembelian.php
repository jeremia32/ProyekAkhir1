<?php
$idPesanan = $_GET['id'];

// Hapus entri terkait di tabel pemesanan_produk
$koneksi->query("DELETE FROM pemesanan_produk WHERE id_pesanan = '$idPesanan'");

// Hapus entri dari tabel pemesanan
$koneksi->query("DELETE FROM pemesanan WHERE id_pesanan = '$idPesanan'");

// Redirect ke halaman data pembelian setelah penghapusan berhasil
echo "<script>alert('Yakin hapus data pemesanan?');</script>";
echo "<script>location='indexadmin.php?halaman=pembelian';</script>";
?>