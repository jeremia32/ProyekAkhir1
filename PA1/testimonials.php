<?php
session_start();



$koneksi = new mysqli("localhost","root","","umkm");
?>
<!DOCTYPE html>
<html>

<head>
    <title>tabonay tela-tela</title>
    <?php include('header.html');
    ?>
</head>

<body class="sub_page">
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
                            <li class="nav-item">
                                <a class="nav-link" href="abouts.php">Tentang</a>
                            </li>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="products.php">produk</a>
                            </li>
                            <li class="nav-item active">
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
    </div>
    <!-- inner page section -->
    <section class="inner_page_head">
        <div class="container_fuild">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <h3>Testimoni</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end inner page section -->
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
                                        <img src="images/<?php echo $perproduk['gambar'];?>" alt="" style="  height: 42vh;
                                        max-height: 43vh;">

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
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExample3Controls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>




    <!-- end client section -->
    <!-- footer  -->
    <?php include('footer.php');
    ?>
    <!-- end footer -->
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