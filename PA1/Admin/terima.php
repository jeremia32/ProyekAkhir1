<?php
// Koneksi ke database dan file konfigurasi lainnya
$koneksi = new mysqli("localhost","root","","umkm");
// Periksa apakah parameter ID pesanan telah diterima
if (isset($_GET['id'])) {
    $idPesanan = $_GET['id'];

    // Periksa apakah pesanan dengan ID tersebut ada dalam database
    $query = $koneksi->prepare("SELECT * FROM pemesanan WHERE id_pesanan = ?");
    $query->bind_param("i", $idPesanan);
    $query->execute();
    $result = $query->get_result();

    if ($result->num_rows > 0) {
        // Pesanan ditemukan
        $row = $result->fetch_assoc();
        $statusPesanan = $row['status_pesanan'];

        if ($statusPesanan == 0) {
            // Update status pesanan menjadi "Ditolak"
            $queryUpdate = $koneksi->prepare("UPDATE pemesanan SET status_pesanan = 1 WHERE id_pesanan = ?");
            $queryUpdate->bind_param("i", $idPesanan);
            $queryUpdate->execute();
        }
    }
}

// Redirect kembali ke halaman sebelumnya atau halaman yang diinginkan setelah verifikasi
header("Location: indexadmin.php?halaman=pembelian"); // Ubah "indexadmin.php" sesuai dengan halaman yang diinginkan
exit;
?>