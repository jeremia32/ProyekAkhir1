<?php
include 'koneksi.php';
$koneksi = mysqli_connect("localhost", "root", "", "umkm");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

session_start();

if (isset($_POST['submit']) && $_POST['submit'] == 'Register') {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $code = ($email.date('Y-m-d H:i:s'));

    if (empty($username) || empty($password) || empty($email)) {
        echo "<script>alert('Data yang anda masukkan tidak lengkap');</script>";
        echo "<script>location='login.php';</script>";
        exit();
    }

    $query = "INSERT INTO users (username, password, email, verification_code) VALUES ('$username', '$password', '$email', '$code')";
    $result = mysqli_query($koneksi, $query);

    require '../vendor/autoload.php';

    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host       = "smtp.gmail.com";
        $mail->SMTPAuth   = true;
        $mail->Username   = 'syahrialjsinaga@gmail.com';
        $mail->Password   = 'hhxunnbuqqaynvae';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        $mail->setFrom('from@example.com', 'TabonayTela-Tela');
        $mail->addAddress($email, $username);
		$mail->isHTML(true);
		$mail->Subject = 'Verifikasi akun';
		
		$mail->Body = '
			<html>
			<head>
				<style>
					body {
						font-family: Arial, sans-serif;
						background-color: #f1f1f1;
						color: #333;
					}
					
					.container {
						max-width: 600px;
						margin: 0 auto;
						padding: 20px;
						background-color: #fff;
						border-radius: 5px;
						box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
					}
					
					h1 {
						color: #555;
						text-align: center;
					}
					
					p {
						margin-bottom: 20px;
					}
					
					.button {
						display: inline-block;
						padding: 10px 20px;
						background-color: #007bff;
						color: #fff;
						text-decoration: none;
						border-radius: 5px;
					}
					
					.button:hover {
						background-color: #0056b3;
					}
				</style>
			</head>
			<body>
				<div class="container">
					<h1>Verifikasi Akun</h1>
					<p>Halo ' . $username . ', selamat datang di Tabonay Tela-Tela. Mohon verifikasi akun kamu dengan mengklik tombol di bawah ini:</p>
					<p><a class="button" href="https://tabonaytelatela.satutujutrack.com/login/verifikasi.php?code=' . $code . '">Verifikasi Akun</a></p>
				</div>
			</body>
			</html>
		';
		

        if ($mail->send()) {
            echo "<script>alert('Registrasi berhasil! Silakan periksa email Anda untuk melakukan verifikasi.');</script>";
            echo "<script>location='login.php';</script>";
        } else {
            echo "<script>alert('Terjadi kesalahan dalam mengirim email verifikasi.');</script>";
            echo "<script>location='login.php';</script>";
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>