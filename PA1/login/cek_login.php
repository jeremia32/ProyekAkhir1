<!-- sign in  -->
<?php
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

session_start();
// Menangani registrasi pengguna baru
if(isset($_POST['submit']) && $_POST['submit'] == 'Register') {
// Mendapatkan data dari form


// Menambahkan pengguna baru ke tabel user
$query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
$result = mysqli_query($conn, $query);

if($result) {
echo "Pendaftaran berhasil!";
} else {
echo "Pendaftaran gagal!";
}
}else{
echo "gagal";
}
?>