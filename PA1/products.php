<?php
session_start();


//koneksi ke dalam data base 
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
                            <li class="nav-item ">
                                <a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="abouts.php">Tentang</a>
                            </li>
                            </li>
                            <li class="nav-item active">
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
        <!-- end header section -->
        <!-- end header section -->
    </div>
    <!-- inner page section -->
    <section class="inner_page_head">
        <div class="container_fuild">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <h3>Tabonay Tela-Tela</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end inner page section -->
    <!-- product section -->
    <section class="product_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Produk <span> Tabonay</span>
                </h2>
            </div>
            <div class="search_input" id="search_input_box">
                <div class="container">
                    <form action="pencarian.php" method="get" class="d-flex justify-content-between">
                        <input type="text" class="form-control" name="keyword" id="search_input"
                            placeholder="&#xf002; Cari.." style="font-family: 'FontAwesome', Arial;">

                        <button type="submit" class="btn"></button>
                        <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
                    </form>
                </div>
            </div>
            <div class="row">
                <!-- @foreach( $product as $p) -->
                <?php $ambil = $koneksi->query("SELECT * FROM produk") ?>
                <?php while($perproduk=$ambil->fetch_assoc()){?>

                <div class="col-sm-6 col-md-4 col-lg-3" style="margin-bottom:20px;">
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



        </div>
    </section>
    <!-- end product section -->
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