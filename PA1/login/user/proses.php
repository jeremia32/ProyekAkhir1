<?php
include 'koneksi.php';
$koneksi = mysqli_connect("localhost","root","","umkm");


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


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
$query = "INSERT INTO users (username, password, email, verification_code) VALUES ('$username', '$password', '$email', '$verificationCode')";
$result = mysqli_query($conn, $query);

// require 'path/to/PHPMailer/src/Exception.php';
// require 'path/to/PHPMailer/src/PHPMailer.php';
// require 'path/to/PHPMailer/src/SMTP.php';

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'syahrialjsinaga@gmail.com';                     //SMTP username
    $mail->Password   = 'Hizkiadion123';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('fromTabonay Tela-Tela.com', 'Verivikas');
    $mail->addAddress('$email', '$username');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Verivikasi akun ';
    $mail->Body    = 'Halo '.$username.' selamat datang di tabonay tela-tela <br> mohon verifikasi akun kamu ke sini 
    <a href="https://tabonaytelatela.satutujutrack.com/login/verifikasi.php='.$verificationCode.'">Verifikasi</a> ';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

  
    if ($mail->send()){
        $koneksi->query("INSERT INTO users(username, password, email, verification_code) VALUES ('$username', '$password', '$email', '$verificationCode')");
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}