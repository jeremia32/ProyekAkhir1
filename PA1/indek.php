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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" />
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
                    <div class="carousel-item active" style="height: 67vh; max-height: 69vh;">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-7 col-lg-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            <span>
                                                Selamat Datang
                                            </span>
                                            <h1>Tabonay Tela-Tela

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
                    <div class="carousel-item " style="height: 67vh; max-height: 69vh;">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-7 col-lg-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            <span>
                                                Ada produk diskon
                                            </span>
                                            <br>
                                            <h1>sampai 20%
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
                    <div class="carousel-item" style="height: 67vh; max-height: 69vh;">
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
                                            Terima kasih telah berkunjung ke Tabonay - Tempatnya Belanja UMKM! Dukung
                                            produk lokal dengan berbelanja di sini. Jangan lupa kembali lagi untuk
                                            penawaran menarik lainnya!
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

        <!-- end slider section -->
    </div>
    <section class="why_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Keuntungan Belanja di Sini
                </h2>
            </div>
            <div class="row" style="display: flex;">
                <div class="col-md-4">
                    <div class="box" data-aos="fade-down-right">
                        <div class="img-box">
                            <i class="fa fa-truck" style="font-size: 37px;"></i>
                        </div>
                        <div class="detail-box">
                            <h5>Pengiriman cepat</h5>
                            <p>Kami mengusahakan pengiriman yang terbaik untuk anda</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="box " data-aos="zoom-out">
                        <div class="img-box">
                            <i class='fa fa-credit-card' style='font-size:60px'></i>

                        </div>
                        <div class="detail-box">
                            <h5>
                                Gratis ongkir
                            </h5>
                            <p>
                                Gratis biaya kirim sampai tujuan
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box " data-aos="fade-left">
                        <div class="img-box">
                            <i class='fa fa-check-square' style='font-size:75px'></i>
                            <div class="detail-box">
                                <h5>
                                    Kualitas Terbaik
                                </h5>
                                <p>
                                    Produk terbaik dengan kualitas terbaik
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- end why section -->


    <!-- arrival section -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li> <!-- Add this line for the new image -->
            <!-- Add more carousel indicators here if needed -->
        </ol>

        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="lhut">
                    <div class="cuki cuki1">
                        <img src="images/paksandi1.png" class="gambar arrival_section" alt="Pak Luhut"
                            style="width: 60%; min-width: 23rem; height: 30rem; border-radius: 3rem;">
                    </div>
                    <div style="width: 40%; display: flex; align-items: center;" class="cuki mt-2">
                        <div>
                            <center>
                                <h2 class="text-uppercase font-weight-bold">Tabonay Tela-tela</h2>
                            </center>
                            <p class="lead"
                                style="overflow-wrap: break-word; word-wrap: break-word; width: auto; font-size: small;">
                                UMKM Tabonay Tela Tela dikenal karena terus berinovasi dalam membuat produk-produk unik
                                dan menarik yang menggabungkan kearifan lokal dengan teknologi modern. Produk-produk
                                UMKM Tabonay Tela Tela selalu meninggalkan kesan yang kuat pada para pelanggannya karena
                                kualitas makanan yang baik Kehadiran UMKM makanan Tabonay Tela Tela juga dapat
                                mempromosikan pariwisata daerah dan menarik minat wisatawan untuk mencoba makanan khas
                                lokal.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="lhut">
                    <div class="cuki cuki1">
                        <img src="images/paksandi2.png" class="gambar arrival_section" alt="Sandi"
                            style="width: 60%; min-width: 23rem; height: 30rem; border-radius: 3rem;">
                    </div>
                    <div style="width: 40%; display: flex; align-items: center;" class="cuki mt-2">
                        <div>
                            <center>
                                <h2 class="text-uppercase font-weight-bold">Tabonay Tela-tela</h2>
                            </center>
                            <p class="lead"
                                style="overflow-wrap: break-word; word-wrap: break-word; width: auto; font-size: small;">
                                UMKM Tabonay Tela Tela dikenal karena terus berinovasi dalam membuat produk-produk unik
                                dan menarik yang menggabungkan kearifan lokal dengan teknologi modern. Produk-produk
                                UMKM Tabonay Tela Tela selalu meninggalkan kesan yang kuat pada para pelanggannya karena
                                kualitas makanan yang baik Kehadiran UMKM makanan Tabonay Tela Tela juga dapat
                                mempromosikan pariwisata daerah dan menarik minat wisatawan untuk mencoba makanan khas
                                lokal.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>




        <style>
        .lhut {
            margin-inline: 4rem;
            height: 32rem;
            overflow: hidden;
            padding: 1.5rem;
            display: flex;
        }

        .cuki1 {
            width: 50%;
            display: flex;
            justify-content: flex-end;
            padding-inline: 1rem;
        }


        .arrival_section {
            position: relative;
            animation-name: slidein;
            animation-duration: 2s;
            max-height: 600px;


        }

        @media (max-width: 900px) {
            .lhut {
                display: block;
                height: fit-content;
            }

            .cuki {
                width: 100%;
                min-width: 100%;
                justify-content: center;
            }
        }
        </style>

        <!-- end arrival section -->
        <!-- product section -->
        <section class="product_section layout_padding">
            <div class="container">
                <div class="heading_container heading_center">
                    <h2>
                        Produk <span>Terlaris</span>
                    </h2>
                </div>
            </div>
            <div class="row">
                <?php $ambil = $koneksi->query("SELECT * FROM produk WHERE status = 1 LIMIT 4 "); ?>
                <?php $counter = 0; ?>
                <?php while($perproduk = $ambil->fetch_assoc()) { ?>
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
                        <div class="img-box">
                            <img src="images/<?php echo $perproduk['gambar'];?>" alt="">
                        </div>
                        <div class="detail-box">
                            <h5><?php echo $perproduk['nama_produk']; ?></h5>
                            <h6>Rp <?php echo number_format($perproduk['harga']);?></h6>
                        </div>
                    </div>
                </div>
                <?php $counter++; ?>
                <?php } ?>
                <?php if ($counter < 5) {
                for ($i = 0; $i < (45- $counter); $i++) { ?>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <!-- Placeholder for additional empty product box -->
                </div>
                <?php }
            } ?>


            </div>
        </section>
        <!-- end product section -->

        <!-- Button trigger modal -->
        <a href="#" class="kiri" data-toggle="modal" data-target="#myModal">
            <i class="fa fa-question-circle"></i>
        </a>
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalLabel">Ada yang bisa kami bantu?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Ini adalah isi dari pertanyaan umum.</p>
                            <div class="row">
                                <div class="col-4">
                                    <div class="list-group" id="list-tab" role="tablist">
                                        <a class="list-group-item list-group-item-action active" id="list-home-list"
                                            data-bs-toggle="list" href="#list-home" role="tab"
                                            aria-controls="list-home">
                                            bagaimana cara melakukan pemesanan?</a>
                                        <a class="list-group-item list-group-item-action" id="list-profile-list"
                                            data-bs-toggle="list" href="#list-profile" role="tab"
                                            aria-controls="list-profile">bagaimana cara melakukan pembayaran? </a>
                                        <a class="list-group-item list-group-item-action" id="list-messages-list"
                                            data-bs-toggle="list" href="#list-messages" role="tab"
                                            aria-controls="list-messages">infromasi selengkapnya!</a>

                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                                            aria-labelledby="list-home-list">
                                            <h6>Cara melakukan pemesanan:</h6>
                                            <ol class="list-group list-group-numbered">
                                                <li class="list-group-item">Anda wajib melakukan Login terlebih
                                                    dahulu
                                                </li>
                                                <li class="list-group-item">Anda mengunjugi halaman produk</li>
                                                <li class="list-group-item">Anda dapat menekan tombol tambahkan ke
                                                    keranjang </li>
                                                <li class="list-group-item">Anda juga dapat melihat detail produk
                                                </li>
                                                <li class="list-group-item">Di halaman keranjang anda dapat
                                                    melakukan cheakout dan melanjutkan belanja
                                                </li>
                                                <li class="list-group-item">Dihalaman cheakout anda akan diminta
                                                    konfirmasi pesanan
                                                </li>
                                                <li class="list-group-item">Terakhir anda akan menekan icon Wa
                                                    untuk
                                                    memberitahu pesananan anda ke pada admin </li>
                                            </ol>
                                        </div>
                                        <div class="tab-pane fade" id="list-profile" role="tabpanel"
                                            aria-labelledby="list-profile-list">

                                            <h6>Cara melakukan Pembayaran:</h6>

                                            <ol class="list-group list-group-numbered">
                                                <li class="list-group-item">Anda wajib melakukan Login terlebih
                                                    dahulu
                                                </li>
                                                <li class="list-group-item">Dihalaman cheakout anda akan diminta
                                                    konfirmasi pesanan yang berisi infromasi pembayaran yang akan anda
                                                    lakukan
                                                </li>
                                                <li class="list-group-item">lalu kirim pesanan anda
                                                </li>
                                                <li class="list-group-item">Terakhir anda akan menekean icon Wa
                                                    untuk
                                                    memberitahu pesananan anda ke pada admin </li>
                                                <li class="list-group-item">Nanti admin akan memberikan no rekening atau
                                                    kode QRIS untuk melakukan pembayaran dan anda dapat mengirim bukti
                                                    ke
                                                    admin melalui WA.
                                                </li>
                                            </ol>
                                        </div>

                                        <div class="tab-pane fade" id="list-messages" role="tabpanel"
                                            aria-labelledby="list-messages-list">
                                            <h6>Jika ada pertanyaan:</h6>
                                            <ol class="list-group list-group-numbered">
                                                <li class="list-group-item">kunjungi link ini
                                                    <a href="https://wa.me/+6281397481172?text=HI%20admin%20tabonay%20saya%20memiliki%20pertanyaan"
                                                        target="_blank">Klik disini</a>
                                                </li>
                                            </ol>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-between">
                            <a class="navbar-brand" href="index.php"> <img src="images/logo.jpg" alt="#"
                                    width="70" /></a>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <style>
        .kiri {
            position: fixed;
            bottom: 2rem;
            left: 2rem;
        }

        .kiri i {
            font-size: 20px;
            color: white;
            padding: 13px;
            background: orange;
            border-radius: 2rem;
        }

        .kiri i:hover {

            opacity: 0.8;
            background-color: rgb(70, 67, 67);
            color: rgb(215, 212, 206);
            border: 2px solid rgb(227, 223, 215);
            transition: 1s;


        }
        </style>
        <!-- end modal  -->


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
        </style>
        <!-- client section -->
        <!-- testimoni  section -->
        <section class="client_section layout_padding">
            <div class="container">
                <div class="heading_container heading_center">
                    <h2>Testimoni pelanggan</h2>
                </div>

                <?php $ambil = $koneksi->query("SELECT * FROM testimoni WHERE status = 1 ") ?>
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

        <!-- AOS -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
        document.addEventListener("DOMContentLoaded", function() {
            AOS.init();
        });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>

</body>

</html>