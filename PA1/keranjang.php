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

    <title>tabonay tela-tela</title>
    <?php include('header.html');
    ?>


<body>
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
                        <th>produk</th>
                        <th>gambar</th>
                        <th>harga</th>
                        <th>Jumlah</th>
                        <th>Subharga</th>
                        <th>aksi</th>
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
                        <td><a href="hapuskeranjang.php?id=<?php echo $id_produk ?>"
                                class="btn btn-outline-danger btn-xs">Hapus</a></td>
                    </tr>
                    <?php $nomor++?>
                    <?php endforeach?>

                </tbody>
            </table>

            <a href="index.php" class="btn btn-secondary">Lanjutkan Belanja</a>
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
    
    font-size: smaller;
    overflow: hidden;
   
  }

}
  
    </style>
</body>

</html>