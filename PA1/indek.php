<!-- admin.php -->
<?php
session_start();
//koneksi ke dalam data base 
$koneksi = new mysqli("localhost","root","","umkm");
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
                <nav class="navbar navbar-expand-lg custom_nav-container">
                    <a class="navbar-brand" href="index.php"> <img src="images/logo.jpg" alt="#" width="95" /></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="abouts.php">Tentang</a>
                            </li>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="products.php">Produk</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="testimonials.php">Testimoni</a>
                            </li>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="login/login.php">
                                    <i class="fa fa-user" style="font-size:20px">
                                        <br>
                                        <h6>masuk</h6>
                                    </i>
                                </a>
                            </li>
                            <!-- <li class="nav-item">
                           <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                           <button type="submit" class="btn"></button>
                        </li> -->
                        </ul>
                    </div>
                </nav>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class="slider_section ">
            <div class="slider_bg_box" style="height: 90vh;">
                <img src="images/background.jpg" alt="" style="width: 100%;">
            </div>
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-7 col-lg-6 ">
                                    <div class="detail-box">
                                        <h1 >
                                            <span>
                                                Selamat Datang
                                            </span>
                                            <h1 style="color: rgb(47, 212, 44);">Tabonay Tela-Tela

                                            </h1>
                                            <p style="color:white;">
                                                Terima kasih telah mempercayakan kami sebagai tempat berbelanja Anda .
                                                kami
                                                berharap dapat memberikan pengalaman berbelanja yang nyaman dan
                                                menyenangkan.
                                            </p>
                                            <div class="btn-box">
                                                <a href="products.php" class="btn1">
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
                                            <h1 style="color: rgb(47, 212, 44);">sampai 20%
                                            </h1>
                                            <p style="color:white;">
                                                Jangan lewatkan kesempatan untuk berbelanja dengan harga terbaik
                                                kunjungi
                                                halamnan produk kami sekarang dan nikmati produk kami sekarang dan
                                                dapatkan
                                                sekarang juga
                                            </p>
                                            <div class="btn-box">
                                                <a href="products.php" class="btn1">
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
                                            <a href="products.php" class="btn1">
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
                    <ol class="carousel-indicators">
                        <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                        <li data-target="#customCarousel1" data-slide-to="1"></li>
                        <li data-target="#customCarousel1" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- scroll -->
        <a href="#" class="top"><i class='fa fa-long-arrow-up'></i></a>
        <!-- end scroll -->
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
                            <i class='fa fa-truck' style='font-size:35px'></i>
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
                                mengirim sampai tempat tujuan dengan gratis..
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
                                   kualitas terbaik 
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

    <!-- arrival section -->
    <section class="arrival_section bg-light">
        <div class="container">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" style="  height: 52vh;
                max-height: 53vh;">
                    <div class="carousel-item active">
                        <img src="images/paksandi1.png" class="d-block w-25" alt="..." style="border-radius: 3rem;">
                    </div>
                    <div class="carousel-item">
                        <img src="images/paksandi2.png" class="d-block w-25" alt="..." style="border-radius: 3rem; height: 25rem;">
                    </div>

                    <div class="row">
                        <div class="col-md-8 ml-auto">
                            <div class="heading_container remove_line_bt">

                                <h2>
                                    Tabonay tela-tela
                                </h2>
                            </div>
                            <p style="margin-top: 30px;margin-bottom: 40px;">
                                UMKM Tabonay Tela Tela dikenal karena terus berinovasi dalam membuat produk-produk unik dan menarik yang menggabungkan kearifan lokal dengan teknologi modern.
                                Produk-produk UMKM Tabonay Tela Tela selalu meninggalkan kesan yang kuat pada para pelanggannya karena kualitas makanan yang baik
                                Kehadiran UMKM makanan Tabonay Tela Tela juga dapat mempromosikan pariwisata daerah dan menarik minat wisatawan untuk mencoba makanan khas lokal.
                            </p>

                            <a href="abouts.php">
                               jelajahi 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- end arrival section -->
    <!-- product section -->
    <section class="product_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    produk <span>Terlaris</span>
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
                                <a href=" detail.php?id=<?php echo $perproduk['id_produk'];?>" class=" option1">
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

            
        </div>
    </section>
    <!-- end product section -->

    <!-- client section -->
    <!-- client section -->
    <section class="client_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>Testimoni Pelanggan</h2>
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
                    <span class="sr-only">selanjutnyas</span>
                </a>
            </div>
        </div>
    </section>
    <!-- end client section -->
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>

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
</style>