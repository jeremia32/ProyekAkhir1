<?php
session_start();
$koneksi = new mysqli("localhost", "root", "", "umkm");

if ($koneksi->connect_errno) {
    echo "Failed to connect to MySQL: " . $koneksi->connect_error;
    exit();
}

// ... (kode lainnya)
if (isset($_GET['id'])) {
    $id_produk = $_GET['id'];

    // Ambil data produk
    $ambil_produk = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
    $data_produk = $ambil_produk->fetch_assoc();

    // Ambil jumlah pesanan yang dibatalkan
    $jumlah_batal = $_SESSION["keranjang"][$id_produk];

    // Hitung stok baru
    $stok_terbaru = $data_produk['stok'] + $jumlah_batal;

    // Perbarui stok
    $koneksi->query("UPDATE produk SET stok='$stok_terbaru' WHERE id_produk='$id_produk'");

    // Hapus produk dari keranjang belanja
    unset($_SESSION["keranjang"][$id_produk]);

    // Ambil id_pesanan dari database berdasarkan user
    $id_user = $_SESSION['users']['id_akun'];
    $ambil_pesanan = $koneksi->query("SELECT * FROM pemesanan WHERE akun_id = '$id_user' ORDER BY id_pesanan DESC LIMIT 1");
    $pesanan = $ambil_pesanan->fetch_assoc();
    $idPesanan = $pesanan['id_pesanan'];

    // Perbarui status pesanan menjadi pesanan telah dibatalkan (status_pesanan = 3)
    $koneksi->query("UPDATE pemesanan SET status_pesanan = 3 WHERE id_pesanan = '$idPesanan'");

    // Perbarui session keranjang
    $_SESSION["keranjang"] = array_values($_SESSION["keranjang"]);

    echo "<script>alert('Pesanan telah dibatalkan');</script>";
    echo "<script>location='keranjang.php';</script>";
    exit;
}

// ... (kode lainnya)
?>