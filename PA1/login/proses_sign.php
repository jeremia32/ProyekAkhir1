<?php
// Menghubungkan dengan database
$host = 'localhost';
include 'koneksi.php';

session_start();

// Menangani registrasi pengguna baru
if(isset($_POST['submit']) && $_POST['submit'] == 'Register') {
	// Mendapatkan data dari form
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	
	// Memeriksa apakah semua data sudah diisi
	if(empty($username) || empty($password) || empty($email)) {
		echo"<script>alert('Data yang anda masukkan tidak lengkap');</script>";
		echo"<script>location='login.php';</script>";
		exit();
	}
	
	// Menambahkan pengguna baru ke tabel user
	$query = "INSERT INTO users (username, password, email) VALUES ('$username', '$password','$email')";
	$result = mysqli_query($conn, $query);

    if($result) {
		echo"<script>alert('Selamat anda menjadi pelanggan kami');</script>";
		echo"<script>location='login.php';</script>";
	} else {
		echo"<script>alert('Maaf data yang anda masukkan tidak sesuai');</script>";
	}
} else {
	echo "gagal";
}
?>