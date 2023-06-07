<!DOCTYPE html>
<html>

<head>
    <title>tabonay tela-tela</title>
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


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
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
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
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
        <!-- why section -->
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
                                <i class='fa fa-truck' style='font-size:60px'></i>
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Pengiriman Cepat
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
                                <i class='fa fa-credit-card' style='font-size:78px'></i>

                            </div>
                            <div class="detail-box">
                                <h5>
                                    Grtis Ongkir
                                </h5>
                                <p>
                                    mengirim sampai tempat tujuan
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box ">
                            <div class="img-box">
                                <i class='fa fa-check-square' style='font-size:95px'></i>
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
        <!-- deskripsi -->
        <section class="container text-center" style="max-width: 800px">
            <h2 class="w3-wide">Tabonay tela - tela </h2>
            <p class="w3-opacity"><i>We love umkm</i></p>
            <div class="flex-container" style="max-width: 100%;">
                <div class="flex-item" style="width: 50%;">
                    <p>UMKM di daerah merupakan salah satu sektor ekonomi yang sangat penting dalam mendukung
                        pertumbuhan ekonomi lokal Ada banyak jenis UMKM yang dapat ditemukan di daerah, seperti usaha
                        kuliner, kerajinan tangan, dan sebagainya. Dalam beberapa tahun terakhir, pemerintah daerah
                        telah memperkuat dukungan dan bantuan kepada UMKM, misalnya dengan menyediakan akses ke pasar
                        dan permodalan.</p>
                </div>
                <div class="flex-item">
                    <p>Ada banyak peluang bisnis yang dapat dijajaki di daerah, terutama dengan mengidentifikasi
                        kebutuhan dan potensi lokal. Salah satu tantangan yang dihadapi oleh UMKM di daerah adalah
                        kurangnya akses ke informasi dan teknologi yang diperlukan untuk mengembangkan usaha mereka.
                        UMKM Tabonay Tela Tela tidak lepas dari semangat dan ketekunan dalam menghadapi tantangan dan
                        berusaha terus mengembangkan kreativitas dan kualitas produk.</p>
                </div>
            </div>
        </section>

        <style>
        .container {
            animation-name: fadeIn;
            animation-duration: 2s;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }


        /* buat deskripsi */
        .flex-container {
            display: flex;
            justify-content: space-between;
        }

        .flex-item {
            flex-basis: 48%;
            margin-left: 40px;
            margin-right: 40px;
        }
        </style>


        <div class="lhut">

            <div class="cuki cuki1">
                <img src="images/pak luhut.jpg" class="gambar arrival_section" alt="Pak Luhut"
                    style="width:60%; min-width: 23rem; height:30rem; border-radius:3rem;">
            </div>

            <div style="width: 40%; display: flex; align-items: center;" class="cuki mt-2">
                <div>
                    <center>
                        <h2 class="text-uppercase font-weight-bold">Tabonay Tela-tela</h2>
                    </center>
                    <p class="lead"
                        style="overflow-wrap: break-word;word-wrap: break-word; width: auto; font-size: small;">
                        UMKM Tabonay Tela Tela dikenal karena terus berinovasi dalam membuat produk-produk unik
                        dan menarik yang menggabungkan kearifan lokal dengan teknologi modern.
                        Produk-produk UMKM Tabonay Tela Tela selalu meninggalkan kesan yang kuat pada para
                        pelanggannya karena kualitas makanan yang baik
                        Kehadiran UMKM makanan Tabonay Tela Tela juga dapat mempromosikan pariwisata daerah dan
                        menarik minat wisatawan untuk mencoba makanan khas lokal.
                        Makanan UMKM Tabonay Tela Tela disajikan dengan tampilan yang menarik sehingga dapat
                        menggugah selera konsumen <br>
                        Seperti pada gambar disamping, Tabonay Tela-Tela mendapatkan kesempatan
                        dimana Pak Luhut mencoba produk dari UMKM Tabonay yaitu tela-tela.
                        Saat Pak Luhut mencoba produk jualan saya, energi dan semangatnya seakan
                        menghidupkan ruangan. Melalui ekspresi wajahnya yang serius dan bertekad,
                        beliau memancarkan keyakinan bahwa produk ini memiliki potensi besar di
                        pasar. Setiap pertanyaan dan saran dari beliau dianggap sebagai dorongan untuk
                        terus meningkatkan dan menghadirkan solusi yang lebih baik. Dalam momen
                        tersebut, saya merasakan keberuntungan dan kehormatan yang luar biasa dapat
                        melihat Pak Luhut mengapresiasi produk jualan saya.
                    </p>
                </div>
            </div>
        </div>


        <style>
        .lhut {
            margin-inline: 4rem;
            height: 30rem;
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



        @keyframes slidein {
            from {
                top: 100%;
            }

            to {
                top: 0%;
            }
        }

        @keyframes slidein2 {
            from {
                top: 0%;
            }

            to {
                right: 100%;
            }
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


        <!-- end arrival section 
        -->


        <!-- end arrival section  -->


        <!-- footer -->
        <?php include('footer.php');
    ?>
        <!-- footer end  -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
        <!-- jQery -->
        <script src="js/jquery-3.4.1.min.js"></script>
        <!-- popper js -->
        <script src="js/popper.min.js"></script>
        <!-- bootstrap js -->
        <script src="js/bootstrap.js"></script>
        <!-- custom js -->
        <script src="js/custom.js"></script>

        <!-- google map  -->
        <script>
        < /body>



        <
        /html>