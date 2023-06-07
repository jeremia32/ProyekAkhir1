<!-- admin.php -->
<?php
session_start();
//koneksi ke dalam data base 
$koneksi = new mysqli("localhost","root","","umkm");

if(!isset($_SESSION['users'])) {
   header("location:indek.php");
   exit();

   $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
   $pecah = $ambil->fetch_assoc();
   $subharga = $pecah["harga"]*$jumlah;
   

   $total_jumlah = 0; // variabel untuk menyimpan total jumlah
foreach($_SESSION["keranjang"] as $id_produk => $jumlah) {
    $total_jumlah += $jumlah; // menambahkan nilai jumlah ke variabel total_jumlah
}
$_SESSION['swtd'] = $total_jumlah;

}

?>

<!DOCTYPE html>
<html>

<head>
    <title>home</title>
    <?php include('header.html');
    ?>
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.php"><img src="images/logo.jpg" alt="#" style="width:
                            8.5rem;" /></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">Tentang</a>
                            </li>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="product.php">Produk</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="testimonial.php">Testimoni</a>
                            </li>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="true"> <span class="nav-label">tabonay<span
                                            class="caret"></span></a>
                                <ul class="dropdown-menu">

                                    <li>
                                        <i class='fa fa-sign-out' style='font-size:10px'>
                                            <a href="login/logout.php">logout</a>
                                        </i>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="keranjang.php">
                                    <i class='fa fa-shopping-cart' style='font-size:24px'>

                                        [
                                        <?php
if(isset($_SESSION['swtd'])) {
    $total = $_SESSION['swtd'];
    echo $total;
} else {
    echo 0;
}
?>

                                        ]

                                    </i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
               
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class="slider_section ">
            <div class="slider_bg_box" style="height: 91vh;" >
                <img src="images/tela-tela.jpg" alt="" style="width: 100%;">
            </div>
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-7 col-lg-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            <span>
                                                Tabonay Tela-Tela
                                            </span>
                                            <br>
                                            gurihnya ngangenin
                                        </h1>
                                        <p>
                                            Terima kasih telah mempercayakan kami sebagai tempat berbelanja Anda . kami
                                            berharap dapat memberikan pengalaman berbelanja yang nyaman dan
                                            menyenangkan.
                                        </p>
                                        <div class="btn-box">
                                            <a href="product.php" class="btn1">
                                                Belanja sekarang
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-7 col-lg-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            <span>
                                                Ada produk yang diskon
                                            </span>
                                            <br>
                                            sampai 20%
                                        </h1>
                                        <p>
                                            Jangan lewatkan kesempatan untuk berbelanja dengan harga terbaik kunjungi
                                            halamnan produk kami sekarang dan nikmati produk kami sekarang dan dapatkan
                                            sekarang juga
                                        </p>
                                        <div class="btn-box">
                                            <a href="product.php" class="btn1">
                                                Belanja sekarang
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-7 col-lg-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            <span>
                                                Selamat berbelanja
                                            </span>
                                            <br>
                                            di Toko Kami

                                        </h1>
                                        <p>
                                            Terima kasih telah berkunjung ke Tabonay - Tempatnya Belanja UMKM! Dukung produk lokal dengan berbelanja di sini. Jangan lupa kembali lagi untuk penawaran menarik lainnya!
                                        </p>
                                        <div class="btn-box">
                                            <a href="product.php" class="btn1">
                                                Belanja sekarang
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <ol class="carousel-indicators" style="margin-top: 1px;">
                        <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                        <li data-target="#customCarousel1" data-slide-to="1"></li>
                        <li data-target="#customCarousel1" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
        </section>
        <style>
            .carousel-item{
                height: 68vh;
                max-height: 68vh;
            }
        </style>

        <!-- end slider section -->
    </div>
    <!-- why section -->
    <section class="why_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Keuntungan Belanja di Sini
                </h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="box ">

                        <div class="img-box">
                            <i class='fa fa-truck' style='font-size:37px'></i>
                        </div>

                        <div class="detail-box">
                            <h5>
                               Pengiriman cepat
                            </h5>
                            <p>
                                kami menyediakan pengiriman cepat di seluruh indonesia
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box ">
                        <div class="img-box">
                            <i class='fa fa-credit-card' style='font-size:60px'></i>

                        </div>
                        <div class="detail-box">
                            <h5>
                                Gratis ongkir 
                            </h5>
                            <p>
                               gratis biaya kirim sampai tujuan 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box ">
                        <div class="img-box">
                            <i class='fa fa-check-square' style='font-size:75px'></i>
                            <div class="detail-box">
                                <h5>
                                    Kualitas Terbaik 
                                </h5>
                                <p>
                                    produk terbaik dengan kualitas terbaik
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- end why section -->

    <!-- about section -->
    <section class="arrival_section">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <img src=" images/pak luhut.jpg" alt=""  style="border-radius: 3rem; width: 100%;">
                </div>

                <div class="col-md-6 ">
                    <h2>Tabonay Tela-tela</h2><br>
                    <p style="margin-top: 20px;margin-bottom: 30px;">
                        UMKM Tabonay Tela Tela dikenal karena terus berinovasi dalam membuat produk-produk unik dan menarik yang menggabungkan kearifan lokal dengan teknologi modern.
                        Produk-produk UMKM Tabonay Tela Tela selalu meninggalkan kesan yang kuat pada para pelanggannya karena kualitas makanan yang baik
                    </p>
                    <a href="about.php">
                        Jelajahi
                    </a>
                </div>

            </div>
        </div>
    </section>
    <!-- end about section -->
    <!-- product section -->
    <section class="product_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Produk <span>Terlaris</span>
                </h2>
            </div>
            <div class="row">
                <!-- @foreach( $product as $p) -->
                <?php $ambil = $koneksi->query("SELECT * FROM produk LIMIT 4") ?>
                <?php while($perproduk=$ambil->fetch_assoc()){?>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <a href="detail.php?id=<?php echo $perproduk['id_produk'];?>" class="option1">
                                    Deskripsi
                                </a>
                                <a href="beli.php?id=<?php echo $perproduk['id_produk'];?>" class="option2">
                                    Beli
                                </a>
                            </div>
                        </div>
                        <div class="img-box" style>
                            <img src="images/<?php echo $perproduk['gambar'];?>" alt="">
                        </div>
                        <div class="detail-box">
                            <h5><?php echo $perproduk['nama_produk']; ?></h5>
                            <h6>
                                Rp.<?php echo number_format($perproduk['harga']);?>
                            </h6>
                        </div>
                    </div>
                </div>
                <?php }?>
                <!-- @endforeach -->
            </div>

            <div class="btn-box">
                <a href="product.php">
                   lihat Semua 
                </a>
            </div>
        </div>
    </section>
    <!-- end product section -->

    <!-- testimoni  section -->
    <section class="client_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>Testimoni pelanggan</h2>
            </div>

            <?php $ambil = $koneksi->query("SELECT * FROM testimoni") ?>
            <div id="carouselExample3Controls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php 
                    $active = "active";
                    while($perproduk=$ambil->fetch_assoc()){
                ?>
                    <div class="carousel-item <?php echo $active ?>">
                        <div class="box col-lg-10 mx-auto">
                            <div class="img_container">
                                <div class="img-box">
                                    <div class="img_box">
                                        <img src="images/<?php echo $perproduk['gambar'];?>" alt="" style="  height: 32vh;
                                        max-height: 33vh;">
                                        

                                    </div>
                                </div>
                            </div>
                            <div class="detail-box">
                                <h5><?php echo $perproduk['Nama']; ?></h5>
                                <h6>Pelanggan</h6>
                                <p><?php echo $perproduk['deskripsi']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php $active = ""; } ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExample3Controls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">sebelumnya</span>
                </a>
                <a class="carousel-control-next" href="#carouselExample3Controls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">selanjutnya</span>
                </a>
            </div>
        </div>
    </section>
    <!--scrol  -->
    <a href="#" class="top"><i class='fa fa-long-arrow-up'></i></a>
    <style>
    .top {
        position: fixed;
        bottom: 2rem;
        right: 2rem;
    }

    .top i {
        font-size: 20px;
        color: white;
        padding: 13px;
        background: orange;
        border-radius: 2rem;
    }



    .top i:hover {

        opacity: 0.8;
        background-color: rgb(70, 67, 67);
        color: rgb(215, 212, 206);
        border: 2px solid rgb(227, 223, 215);
        transition: 1s;


    }

    @media only screen and (max-width: 769px) {
        .box {
            display: block;
        }
    }
    </style>
   <!-- footer -->
   <?php include('footer.php');
   ?>
   <!-- footer end  -->
    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>