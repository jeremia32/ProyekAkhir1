<?php
session_start();
if(!isset($_SESSION['users'])) {
    echo"<script>alert('maaf tidak dapat mengakses harus melakukan login terlebih dahulu');</script>";
    echo"<script>location='login/login.php';</script>";
    exit;
 }

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
        <!-- navbar nya  -->
        <?php include('navbar.php');
    ?>

        <!-- akhir navbar -->
    </div>
    <!-- inner page section -->
    <section class="inner_page_head">
        <div class="container_fuild">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <h3>Tabonay Tela-Tela </h3>
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
                    Produk<span> Tabonay</span>
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
                        <div class="img-box">
                            <img src="images/<?php echo $perproduk['gambar'];?>" alt="">
                        </div>
                        <div class="detail-box" style="display: block;">
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