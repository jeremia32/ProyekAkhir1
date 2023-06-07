<?php
session_start();

if(!isset($_SESSION['users'])) {
    echo"<script>alert('maaf tidak dapat mengakses harus melakukan login terlebih dahulu');</script>";
    echo"<script>location='login/login.php';</script>";
   $total_jumlah = 0; // variabel untuk menyimpan total jumlah
foreach($_SESSION["keranjang"] as $id_produk => $jumlah) {
    $total_jumlah += $jumlah; // menambahkan nilai jumlah ke variabel total_jumlah
}
$_SESSION['swtd'] = $total_jumlah;
}

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
        <?php include('navbar.php');
    ?>
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