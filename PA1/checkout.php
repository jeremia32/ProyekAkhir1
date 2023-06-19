<?php
session_start();
$koneksi = new mysqli("localhost", "root", "", "umkm");

if (!isset($_SESSION['users']) || empty($_SESSION['users'])) {
    echo "<script>alert('Anda harus melakukan login dahulu');</script>";
    echo "<script>location='login/login.php';</script>";
    exit;
}

if (isset($_POST["submit"])) {
    $id_user = $_SESSION['users']['id_akun'];
    
    $alamat = $_POST["alamat"];
    $jenis_pengiriman = $_POST["jenis_pengiriman"];
    $metode_pembayaran = $_POST["metode_pembayaran"];

    $total_belanja = 0;
    foreach ($_SESSION["keranjang"] as $id_produk => $jumlah) {
        $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
        $pecah = $ambil->fetch_assoc();
        $subharga = $pecah["harga"] * $jumlah;
        $total_belanja += $subharga;
    }
    $tanggal_pesanan = date("Y-m-d");
    $koneksi->query("INSERT INTO pemesanan (id_pesanan,akun_id, alamat, jenis_pengiriman, pembayaran, total, tanggal_pesanan,status_pesanan,id_produk) 
                    VALUES ('$id_pesanan','$id_user', '$alamat', '$jenis_pengiriman', '$metode_pembayaran', '$total_belanja', '$tanggal_pesanan','0','$id_produk')");

    $id_pesanan = $koneksi->insert_id;

    foreach ($_SESSION["keranjang"] as $id_produk => $jumlah) {
        $koneksi->query("INSERT INTO pemesanan_produk (id_pesanan, id_produk, jumlah) 
                        VALUES ('$id_pesanan', '$id_produk', '$jumlah')");
    }

    // Simpan data pemesanan di session
    $_SESSION['pemesanan'] = [
        'id_pesanan' => $id_pesanan,
        'alamat' => $alamat,
        'jenis_pengiriman' => $jenis_pengiriman,
        'metode_pembayaran' => $metode_pembayaran,
        'total_belanja' => $total_belanja
    ];

    // Redirect ke halaman checkout_success
    echo "<script>alert('Pemesanan sukses!');</script>";
    echo "<script>location='checkout_success.php';</script>";
    exit;
}
?>

<!-- Kode HTML lainnya -->




<?php

?>

<?php
// ...
$id_user = $_SESSION['users']['id_akun'];

// Ambil data pesanan pengguna berdasarkan ID pengguna
$ambil_pesanan = $koneksi->query("SELECT * FROM pemesanan WHERE akun_id = '$id_user'");
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
                <h1 class="fst-italic ">konfirmasi pesanan </h1>
                <hr>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Produk</th>
                            <th>Gambar</th>
                            <th>Harga</th>
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
                         // Ambil status pesanan
                         ?>

                        <tr>
                            <td><?php echo $nomor; ?></td>
                            <td><?php echo $pecah["nama_produk"];?></td>
                            <td> <img src="images/<?php echo $pecah['gambar'];?>" style="width: 7rem;"></td>
                            <td>Rp.<?php echo number_format($pecah["harga"]);?></td>
                            <td><?php echo $jumlah;?></td>
                            <td>Rp.<?php echo number_format($subharga); ?></td>

                        </tr>
                        <?php $nomor++?>
                        <?php $totalbelanja+=$subharga;?>
                        <?php endforeach?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="5">Total Belanja</th>
                            <th>Rp.<?php echo number_format($totalbelanja)?></th>
                        </tr>
                </table>

                <form method="post" action="checkout.php">
                    <div class="row">
                        <div class="col-md-4">
                            <p class="fst-italic">Username:</p>
                            <div class="form-group">
                                <input type="text" readonly value="<?php echo $_SESSION["users"]["username"]?> "
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <p class="fst-italic">Email:</p>
                                <input type="text" readonly value="<?php echo $_SESSION["users"]["email"]?> "
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <p class="fst-italic">Alamat:</p>
                                <textarea name="alamat" class="form-control" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <p class="fst-italic">Jenis Pengiriman:</p>
                                <select name="jenis_pengiriman" class="form-control" required>
                                    <option value="COD">COD</option>
                                    <option value="reguler">Reguler</option>
                                    <option value="pesan">Pesan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <p class="fst-italic">Pembayaran:</p>
                                <select name="metode_pembayaran" class="form-control" required>
                                    <option value="BNI">BNI</option>
                                    <option value="QRIS">QRIS</option>
                                    <option value="BRI">BRI</option>
                                    <option value="MANDIRI">Mandiri</option>
                                    <option value="bayar_di_tempat">Bayar di Tempat</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Konfirmasi Pesanan</button>
                    </div>
                </form>
            </div>
        </section>
    </nav>


</body>

</html>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>

</body>

</html>