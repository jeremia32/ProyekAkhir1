<?php
include 'koneksi.php';
$koneksi = mysqli_connect("localhost", "root", "", "umkm");

// Mendapatkan parameter verificationCode dari URL
$code = $_GET['code'];

// Mengecek apakah parameter verificationCode ada
if (isset($code)) {
    // Mencari pengguna berdasarkan verificationCode
    $query = "SELECT * FROM users WHERE verification_code = '$code'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        $query = "UPDATE users SET verification_code = 'verified' WHERE verification_code = '$code'";
        $result = mysqli_query($koneksi, $query);
        echo "Verifikasi akun berhasil. Anda dapat masuk ke halaman login.";
        echo "<script>location='login.php';</script>";
    } else {
        echo "Kode verifikasi tidak valid.";
    }
} else {
    echo "Parameter verifikasi tidak ada.";
}
?>