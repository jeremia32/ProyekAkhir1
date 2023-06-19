<?php

session_start();

$koneksi =new mysqli("localhost","root","","umkm");
if(empty($_SESSION["keranjang"])){
   echo "<script>alert('keranjang kosong,silahkan melakukan pemesanan');</script>";
echo "<script>location='product.php';</script>";
}

$total_jumlah = 0; // variabel untuk menyimpan total jumlah
foreach($_SESSION["keranjang"] as $id_produk => $jumlah) {
    $total_jumlah += $jumlah; // menambahkan nilai jumlah ke variabel total_jumlah
}
$_SESSION['swtd'] = $total_jumlah;

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" />

    <title>tabonay tela-tela</title>
    <?php include('header.html');
    ?>


<body>
    <!-- header section strats -->
    <header class="header_section">
        <div class="container">
            <nav class=" navbar navbar-expand-lg custom_nav-container ">
                <a class=" navbar-brand" href="index.php"><img src="images/logo.jpg" alt="#" style="width:
                      8.5rem;" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item ">
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

                        <li class="nav-item active">
                            <a class="nav-link" href="keranjang.php">
                                <i class='fa fa-shopping-cart' style='font-size:20px'> [
                                    <?php
                                                                                    $total = $_SESSION['swtd'];

                                        if($total) {
                                            
                                            $total = $_SESSION['swtd'];
                                            echo $total;
                                        }
                                        else {
                                            echo 0;
                                        }
 ?>
                                    ]</i>
                            </a>
                        </li>


                </div>
        </div>
    </header>
    <!-- end header section -->
    <!-- table keranjang-->
    <section class="konten">
        <div class="container">
            <h1>Keranjang Belanja</h1>
            <hr>
            <table class="table table-bordered">
                <thead class="jere">
                    <tr>
                        <th>No</th>
                        <th>Produk</th>
                        <th>Gambar</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Subharga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="sina">

                    <?php $nomor=1;

                    ?>
                    <?php foreach($_SESSION["keranjang"] as $id_produk => $jumlah):?>
                    <!-- menampilkan produk yang sedang di perulangkan berdasarkan id_produk -->
                    <?php
        $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
        $pecah = $ambil->fetch_assoc();
        $subharga = $pecah["harga"]*$jumlah;
    ?>
                    <tr>
                        <td><?php echo $nomor; ?></td>
                        <td><?php echo $pecah["nama_produk"];?></td>
                        <td><img src="images/<?php echo $pecah['gambar'];?>" alt="" width="100px"></td>
                        <td>Rp.<?php echo number_format($pecah["harga"]);?></td>
                        <td><?php echo $jumlah;?></td>
                        <td>Rp.<?php echo number_format($subharga);?></td>
                        <td>
                            <a href="detail.php?id=<?php echo $id_produk ?>" class="btn btn-outline-primary btn-xs">
                                <i class="fa fa-external-link" aria-hidden="true"></i> view
                            </a>
                        </td>



                    </tr>
                    <?php $nomor++?>
                    <?php endforeach?>

                </tbody>
            </table>
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
                                <p>Bantuan Pemesanan :</p>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="list-group" id="list-tab" role="tablist">
                                            <a class="list-group-item list-group-item-action active" id="list-home-list"
                                                data-bs-toggle="list" href="#list-home" role="tab"
                                                aria-controls="list-home">
                                                bagaimana cara melakukan pemesanan?</a>

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
                                                    <li class="list-group-item">Terakhir anda akan menekean icon Wa
                                                        untuk
                                                        memberitahu pesananan anda ke pada admin </li>
                                                </ol>

                                            </div>
                                            <div class="tab-pane fade" id="list-profile" role="tabpanel"
                                                aria-labelledby="list-profile-list">...</div>
                                            <div class="tab-pane fade" id="list-messages" role="tabpanel"
                                                aria-labelledby="list-messages-list ">...</div>

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


            <a href="products.php" class="btn btn-secondary">Lanjutkan Belanja</a>
            <a href="checkout.php" class="btn btn-success">checkout</a>



        </div>
    </section>







    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    <!-- responsive table  -->
    <style>
    @media only screen and (max-width: 736px) {
        .sina {
            width: 640px;
            max-width: 100%;

            overflow: hidden;
        }
    }

    @media only screen and (max-width: 600px) {
        .sina {
            width: 500px;
            max-width: 100%;

            overflow: hidden;
        }
    }

    @media only screen and (max-width: 494px) {
        .sina {
            width: 400px;
            max-width: 100%;
            overflow: hidden;
        }
    }

    @media only screen and (max-width: 440px) {
        .sina {
            width: 600px;
            max-width: 100%;
            font-size: smaller;
            overflow: hidden;

        }

    }

    /* buat container */
    @media only screen and (max-width: 736px) {
        .header_section {
            width: 740px;
            max-width: 100%;

            overflow: hidden;
        }
    }

    @media only screen and (max-width: 600px) {
        .header_section {
            width: 700%;


            overflow: hidden;
        }
    }

    @media only screen and (max-width: 494px) {
        .header_section {
            width: 800%;
            overflow: hidden;
        }
    }

    @media only screen and (max-width: 440px) {

        .header_section {
            width: 100%;
            font-size: xx-small;
            overflow: hidden;

        }

        .table-bordered {
            width: 100%;
            font-size: smaller;
            overflow: hidden;
            max-width: 1000px;
        }
    }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>