<!DOCTYPE html>
<html>

<head>
    <title>tabonay tela-tela</title>
    <?php
include('header.html');
session_start();

if (isset($_SESSION["keranjang"])) {
    $total_jumlah = 0; // variabel untuk menyimpan total jumlah
    foreach($_SESSION["keranjang"] as $id_produk => $jumlah) {
        $total_jumlah += $jumlah; // menambahkan nilai jumlah ke variabel total_jumlah
    }
    $_SESSION['swtd'] = $total_jumlah;
} else {
    // handle the case where "keranjang" is not defined in the session data
    $_SESSION['swtd'] = 0;
}
?>

</head>

<body class="sub_page">
    <div class="hero_area">
        <!-- header section strats -->
        <?php include('navbar.php');
        ?>
        <!-- end header section -->
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
                                   Gratis Ongkir
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
                                <i class='fa fa-check-square' style='font-size:75px'></i>
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
                <img src="images/pak luhut.jpg" class="gambar arrival_section" alt="Pak Luhut" style="width:60%; min-width: 23rem; height: 23rem; border-radius:3rem;">
            </div>

            <div style="width: 40%; display: flex; align-items: center;" class="cuki mt-2">
                <div>
                    <center><h2 class="text-uppercase font-weight-bold">Tabonay Tela-tela</h2></center>
                    <p class="lead" style="overflow-wrap: break-word;word-wrap: break-word; width: auto; font-size: small;">
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

        .lhut{
            margin-inline: 4rem;
            height: 30rem;
            overflow: hidden;
            padding: 1.5rem;
            display: flex;
        }

        .cuki1{
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
    .lhut{
    display: block;
    height: fit-content;
  }
  .cuki{
    width: 100%;
    min-width: 100%;
    justify-content: center;
  }
}   

        </style>


        <!-- end arrival section 
        -->
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