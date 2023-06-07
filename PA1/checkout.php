<?php
session_start();
$koneksi = new mysqli("localhost","root","","umkm");
if(!isset($_SESSION['users'])) {
    echo"<script>alert('Anda harus melakukan login dahulu');</script>";
    echo"<script>location='login/login.php';</script>";
    exit;
 }
 

?>


<!DOCTYPE html>
<html>

<head>

    <title>tabonay tela-tela</title>
    <?php include('header.html');
    ?>
</head>

<body>
    <!-- header section strats -->
    <header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="index.php"><img src="images/logo.jpg" alt="#" style="width:
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
    <nav>
        <section class="konten">
            <div class="container">
                <h1 class="fst-italic ">checkout</h1>
                <hr>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>produk</th>
                            <th>harga</th>
                            <th>Jumlah</th>
                            <th>Subharga</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $nomor=1;?>
                        <?php $totalbelanja =0;?>
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
                            <td>Rp.<?php echo number_format($pecah["harga"]);?></td>
                            <td><?php echo $jumlah;?></td>
                            <td>Rp.<?php echo number_format($subharga);?></td>

                        </tr>
                        <?php $nomor++?>
                        <?php $totalbelanja+=$subharga;?>
                        <?php endforeach?>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="4">Total Belanja</th>
                            <th>Rp.<?php echo number_format($totalbelanja)?></th>
                        </tr>
                    </tfoot>
                </table>

                <form method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <p class="fst-italic">username:</p>
                            <div class="form-group">
                                <input type="text" readonly value="<?php echo $_SESSION["users"]["username"]?> "
                                    class="form-control">

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <p class="fst-italic">email:</p>
                                <input type="text" readonly value="<?php echo $_SESSION["users"]["email"]?> "
                                    class="form-control">

                            </div>
                        </div>

                        <!-- pesan melalui wa -->
                        <div class="col-md-3">
                            <div class="col-md-3">
                                <p class="fst-italic">pay:</p>
                                <button id="sendWhatsAppButton" class="btn btn-outline-success" name="checkout"
                                    onclick="sendWhatsApp()" style="display:flex;">

                                    <i class=" fa fa-whatsapp" style="font-size:24px"></i>
                                </button>

                                <script>
                                function sendWhatsApp() {
                                    var message = "HII ADMIN, Pemesanan saya adalah:";

                                    // Loop melalui item dalam keranjang
                                    <?php foreach ($_SESSION['keranjang'] as $id_produk => $jumlah): ?>
                                    <?php
            // Ambil informasi produk dari database
            $ambil = $koneksi->query('SELECT * FROM produk WHERE id_produk='.$id_produk);
            $pecah = $ambil->fetch_assoc();
            $subtotal = $pecah['harga'] * $jumlah;
            ?>

                                    // Tambahkan detail item ke pesan
                                    message +=
                                        " <?php echo $jumlah; ?> <?php echo $pecah['nama_produk']; ?> <?php echo 'Rp.'.number_format($subtotal); ?> ";
                                    <?php endforeach; ?>

                                    // Tambahkan total pembelian ke pesan
                                    message += " Total Belanja: <?php echo 'Rp.'.number_format($totalbelanja); ?> ";

                                    // Tentukan nomor telepon WhatsApp
                                    var phoneNumber = "087751758649"; // Nomor telepon dengan kode negara tanpa tanda +

                                    // Konstruksi tautan WhatsApp
                                    var whatsappLink = "https://api.whatsapp.com/send?phone=" + phoneNumber + "&text=" +
                                        encodeURIComponent(message);

                                    // Buka tautan WhatsApp di jendela baru
                                    window.open(whatsappLink, '_blank');

                                    // Menyimpan data ke tabel pemesanan
                                    <?php
            if (isset($_POST["checkout"])) {
                $id_pelanggan = $_SESSION["users"]["id_akun"];
                $tanggal_pembelian = date("Y-m-d");
                $status_pemesanan = 'Berhasil';
                $totalbelanja = $totalbelanja;

                // Menyimpan data ke tabel pemesanan
                $koneksi->query("INSERT INTO pemesanan (akun_id, status_pesanan, tanggal_pesanan, total) VALUES ('$id_pelanggan', '$status_pemesanan', '$tanggal_pembelian', '$totalbelanja')");
                echo"<script>alert('Data produk telah di ubah');
                                </script>";
                                echo "
                                <meta http-equiv='refresh' content='2;url=product.php'>";
                                }
                                ?>
                                }
                                </script>
                            </div>
                        </div>



                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
                            crossorigin="anonymous">
                        </script>

</body>

</html>