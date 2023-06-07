<!-- admin.php -->
<?php
session_start();
//koneksi ke dalam data base 
$koneksi = new mysqli("localhost","root","","umkm");
include('header.html');
    
$keyword= isset($_GET["keyword"]) ? $_GET["keyword"] : "";
$semuadata=array();
$ambik = $koneksi->query("SELECT * FROM produk WHERE nama_produk LIKE '%$keyword%' OR deskripsi LIKE '%$keyword%' ");
while($pecak = $ambik->fetch_assoc())
{
$semuadata[]=$pecak;
}


?>




<!DOCTYPE html>
<html>

<head>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <?php include('header.html');
    ?>
    <link href="css/style.css" rel="stylesheet" />
    <title>pencarian</title>

</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.php"><img src="images/logo.jpg" alt="#" style="width:
                            8.5rem;" /></a>

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

                        </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="keranjang.php">
                                <i class='fas fa-shopping-cart' style='font-size:24px'>
                                    <!--notifikasi  -->
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
                                    <!-- end notifikasi -->
                                </i>
                            </a>
                        </li>
                        </ul>
                    </div>
                </nav>
        </header>


        <div class="container">
            <h3>Hasil Pencarian: <?php echo $keyword?></h3>
            <div class="row">
                <?php foreach($semuadata as $key => $value):?>
                <div class="col-md-3 card-height">
                    <div class="card thumbnail-container">
                        <img class="card-img-top hover-zoom" src="images/<?php echo $value['gambar']?>"
                            alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $value['nama_produk']?></h3>
                            <h5 class="card-text"><?php echo number_format($value['harga'])?></h5>
                            
                            <a href="beli.php?id=<?php echo $value['id_produk'];?>" class="btn btn-primary">Beli</a>
                            <a href="detail.php?id=<?php echo $value['id_produk'];?>" class="btn btn-default">Detail</a>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>

        <style>
        .card-height {
            height: 320px;
            object-fit: cover;
            /* atur tinggi card yang diinginkan */
            margin-bottom: 12rem;
            max-height: max-content;
            width: 300px;
            max-width: 400px;
            
          

        }

        .hover-zoom {
            transition: transform .5s ease;
            height: 280px;
            max-width: 300px;
        }

        .hover-zoom:hover {
            transform: scale(1.1);
        }
.thumbnail-container{
    height: 450px;
    max-height: 800px;
    max-width: 300px;
  
}
.card-body{
   
    width: 200px;
   height: 300px;
   max-height: 300px;
   max-width: 300px;
  

}
       

        /* responsive row nya   */
        @media only screen and (max-width: 736px) {
            .row {
                width: 640px;
                max-width: 100%;
                
                overflow: hidden;
            }
        }

        @media only screen and (max-width: 600px) {
            .row {
                width: 500px;
                max-width: 100%;

                overflow: hidden;
            }
        }

        @media only screen and (max-width: 494px) {
            .row {
                width: 400px;
                max-width: 100%;
                overflow: hidden;
            }
        }

        @media only screen and (max-width: 440px) {
            .row {
                width: 600px;
                max-width: 100%;
                font-size: smaller;
                overflow: hidden;

            }

        }

        /* card  */

        @media only screen and (max-width: 736px) {
            .card-body {
                width: 640px;
                max-width: 100%;
                display: block;
               position: relative;
                overflow: hidden;
            }
        }

        @media only screen and (max-width: 600px) {
            .row {
                width: 500px;
                max-width: 100%;

                overflow: hidden;
            }
        }

        @media only screen and (max-width: 494px) {
            .row {
                width: 400px;
                max-width: 100%;
                overflow: hidden;
            }
        }

        @media only screen and (max-width: 440px) {
            .row {
                width: 600px;
                max-width: 100%;
                font-size: smaller;
                overflow: hidden;

            }

        }
        </style>

        <script>
        $(document).ready(function() {
            $('.card-img-top').hover(
                function() {
                    $(this).addClass('hover-zoom');
                },
                function() {
                    $(this).removeClass('hover-zoom');
                }
            );
        });
        </script>





</body>