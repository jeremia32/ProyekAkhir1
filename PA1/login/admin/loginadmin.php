<?php
include 'koneksi.php';
$koneksi = mysqli_connect("localhost","root","","umkm");
session_start();


if(isset($_POST['submit'])){
  $user = $_POST['uname'];
  $password = $_POST['psw'];
  $query = "SELECT * FROM admin WHERE username='$user' AND password='$password'";
  
  if ($koneksi) {
    $result = $koneksi->query($query);
    if ($result->num_rows == 1)
    {
      $_SESSION['admin'] = $result->fetch_assoc();
      echo "<script>alert('login berhasil');</script>";
      echo "<meta http-equiv='refresh'content='1;url=../../Admin/indexadmin.php'>";
    }
    else{
      echo "<script>alert('login gagal');</script>";
      echo "<meta http-equiv='refresh'content='1;url=tabonay.php'>";
    }
  } else {
    echo "Koneksi database gagal";
  }
}
?> 




