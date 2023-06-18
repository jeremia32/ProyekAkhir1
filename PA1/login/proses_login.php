<?php
include 'koneksi.php';
$koneksi = mysqli_connect("localhost","root","","umkm");
session_start();

if(isset($_POST['submit'])){
$user = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM users WHERE username='$user' AND password='$password' AND status=0";

if ($koneksi) {
$result = $koneksi->query($query);
if ($result->num_rows == 1)
{
$_SESSION['users'] = $result->fetch_assoc();
echo "<script>
alert('Login berhasil');
</script>";
echo "<script>
location = '../index.php';
</script>";
}
else{
echo "<script>
alert('Login gagal. Nama pengguna atau kata sandi salah atau akun dinonaktifkan.');
</script>";
echo "
<meta http-equiv='refresh' content='1;url=login.php'>";
}
} else {
echo "Koneksi database gagal";
}
}





// $username = $_POST['username'];
// $password = $_POST['password'];
// $query = "SELECT * FROM users WHERE username='$username' and password='$password' ";
// $result = mysqli_query($conn, $query);
// if(mysqli_num_rows($result) == 1){
// $row = mysqli_fetch_assoc($result);
// if ($password === $row["password"]){
// // echo $row['role'];
// if($row['role'] == 1){
// $_SESSION['role'] = $row['role'];
// $_SESSION['pelanggan_id'] = $row['id']; // baris yang ditambahkan
// header('Location: ../admin/indexadmin.php');
// } else if($row['role'] == 0) {
// $_SESSION['role'] = $row['role'];
// $_SESSION['pelanggan_id'] = $row['id']; // baris yang ditambahkan
// header('Location: ../index.php');
// }
// }
// }
// }
// ?>