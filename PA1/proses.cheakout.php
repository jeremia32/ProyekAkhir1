<?php
session_start();
$koneksi = new mysqli("localhost", "root", "", "umkm");

if (!isset($_SESSION['users']) || empty($_SESSION['users'])) {
    echo "<script>alert('Anda harus melakukan login dahulu');</script>";
    echo "<script>location='../login/login.php';</script>";
    exit;
}

if (isset($_POST["submit"])) {
    $id_user = $_SESSION['users']['id_akun'];
    $alamat = $_POST["alamat"];
    $jenis_pengiriman = $_POST["jenis_pengiriman"];
    $metode_pembayaran = $_POST["metode_pembayaran"];

    $total_belanja = 0;
    foreach ($_SESSION["keranjang"] as $id_produk => $jumlah) {
        $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
        $pecah = $ambil->fetch_assoc();
        $subharga = $pecah["harga"] * $jumlah;
        $total_belanja += $subharga;
    }

    $koneksi->query("INSERT INTO pemesanan (akun_id, alamat, jenis_pengiriman, pembayaran, total) 
                    VALUES ('$id_user', '$alamat', '$jenis_pengiriman', '$metode_pembayaran', '$total_belanja')");

    $id_pesanan = $koneksi->insert_id;

    foreach ($_SESSION["keranjang"] as $id_produk => $jumlah) {
        $koneksi->query("INSERT INTO pemesanan_produk (id_pesanan, id_produk, jumlah) 
                        VALUES ('$id_pesanan', '$id_produk', '$jumlah')");
    }

    unset($_SESSION["keranjang"]);

    echo "<script>alert('Pemesanan sukses!');</script>";
    echo "<script>location='checkout_success.php';</script>";
    exit;
} else {
    echo "<script>alert('Akses tidak valid');</script>";
    echo "<script>location='checkout.php';</script>";
    exit;
}