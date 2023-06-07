<?php
session_start();
//koneksi ke dalam data base 
$koneksi = new mysqli("localhost","root","","umkm");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="../css/stylesh.css" />
</head>

<body>
    <div class="ocean">
        <div class="wave"></div>
        <div class="wave"></div>
    </div>
    <!-- menu daftar  -->
    <section>
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form method="POST" action="proses_sign.php">
                    <h1>Daftar</h1>
                    <div class="social-container">
                        <a href="https://Github.com/farazc60" target="_blank" class="social"><i
                                class="fab fa-whatsapp"></i></a>
                        <a href="https://Codepen.io/codewithfaraz" target="_blank" class="social"><i
                                class="fab fa-facebook"></i></a>
                        <a href="https://www.instagram.com/tabonay_telatela/" target="_blank" class="social"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                    <span>Massukan data baru anda</span>
                    <label>
                        <input type="text" placeholder="Name" name="username" />
                    </label>
                    <label>
                        <input type="password" placeholder="Password" name="password" />
                    </label>
                    <label>
                        <input type="email" placeholder="email" name="email" />
                    </label>
                    <button style="margin-top: 9px" type="submit" name="submit" value='Register'>Daftar</button>
                </form>
            </div>

            <!-- menu LOGIN -->
            <div class="form-container sign-in-container">
                <form method="POST" action="proses_login.php">
                    <h1>Bergabung</h1>
                    <div class="social-container">
                        <a href="https://api.whatsapp.com/send?phone=62887751758649" target="_blank" class="social"><i
                                class="fab fa-whatsapp"></i></a>
                        <a href="https://Codepen.io/codewithfaraz" target="_blank" class="social"><i
                                class="fab fa-facebook"></i></a>
                        <a href="https://www.instagram.com/tabonay_telatela/" target="_blank" class="social"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                    <span> silahkan masukkan data di bawah</span>
                    <label>
                        <input type="text" placeholder="username" name="username" />
                    </label>
                    <label>
                        <input type="password" placeholder="Password" name="password" />
                    </label>
                    <a href="admin/tabonay.php">kamu adalah admin?</a>
                    <button type="submit" name="submit">LOGIN</button>
                </form>
            </div>

            <!-- end login  -->
            <!--  -->
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Login</h1>
                        <p>yukk login jika anda sudah punya akun..</p>
                        <button class="ghost mt-5" id="signIn">Login</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Buat Akun!</h1>
                        <p>Ayo..Daftar Jika anda belum Punya akun...</p>
                        <button class="ghost" id="signUp" name="daftar">Daftar..</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end login  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>

    <script src="../js/script.js"></script>
</body>

</html>