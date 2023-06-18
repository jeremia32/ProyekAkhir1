    <?php
    session_start();
    $koneksi = new mysqli("localhost", "root", "", "umkm");

    if (!isset($_SESSION['users']) || empty($_SESSION['users'])) {
        echo "<script>alert('Anda harus melakukan login dahulu');</script>";
        echo "<script>location='../login/login.php';</script>";
        exit;
    }

    // Mendapatkan ID pesanan terakhir yang dilakukan oleh pengguna
    $id_user = $_SESSION['users']['id_akun'];
    $ambil_pesanan = $koneksi->query("SELECT * FROM pemesanan WHERE akun_id = '$id_user' ORDER BY id_pesanan DESC LIMIT 1");
    $pesanan = $ambil_pesanan->fetch_assoc();

    foreach ($_SESSION["keranjang"] as $id_produk => $jumlah) {
        $ambil_produk = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
        $data_produk = $ambil_produk->fetch_assoc();
        $stok_terbaru = $data_produk['stok'] - $jumlah;
        $koneksi->query("UPDATE produk SET stok='$stok_terbaru' WHERE id_produk='$id_produk'");
    }

    ?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>tabonay tela-tela</title>
        <?php include('header.html'); ?>
    </head>

    <body>
        <!-- header section starts -->
        <header class="header_section">
            <!-- Tampilan header -->
        </header>

        <!-- Tampilan konten -->
        <section class="konten">
            <div class="container">
                <h1 class="fst-italic">Checkout Success</h1>
                <hr>
                <h3>Pesanan Anda:</h3>

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
                        <?php
                        $nomor = 1;
                        $totalbelanja = 0;
                        foreach ($_SESSION["keranjang"] as $id_produk => $jumlah) {
                            $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
                            $pecah = $ambil->fetch_assoc();
                            $subharga = $pecah["harga"] * $jumlah;
                            $totalbelanja += $subharga;
                            ?>
                        <tr>
                            <td><?php echo $nomor; ?></td>
                            <td><?php echo $pecah["nama_produk"]; ?></td>
                            <td><img src="images/<?php echo $pecah['gambar']; ?>" style="width: 7rem;"></td>
                            <td>Rp.<?php echo number_format($pecah["harga"]); ?></td>
                            <td><?php echo $jumlah; ?></td>
                            <td>Rp.<?php echo number_format($subharga); ?></td>
                        </tr>
                        <?php
                            $nomor++;
                        }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="5">Total Belanja</th>
                            <th>Rp.<?php echo number_format($totalbelanja) ?></th>
                        </tr>
                    </tfoot>
                </table>

                <h3>Status Pesanan:</h3>
                <p>Nomor Pesanan: <?php echo $pesanan['id_pesanan']; ?></p>
                <p>Alamat Pengiriman: <?php echo $pesanan['alamat']; ?></p>
                <p>Jenis Pengiriman: <?php echo $pesanan['jenis_pengiriman']; ?></p>
                <p>Metode Pembayaran: <?php echo $pesanan['pembayaran']; ?></p>
                <p>Total Pembayaran: Rp.<?php echo number_format($totalbelanja); ?></p>

                <p>Status Pemesanan:
                    <?php
                    if ($pesanan['status_pesanan'] == 0) {
                        echo "Menunggu Konfirmasi Pembayaran";
                    } elseif ($pesanan['status_pesanan'] == 1) {
                        echo "Pembayaran Diterima, Menunggu Pengiriman";
                    } elseif ($pesanan['status_pesanan'] == 2) {
                        echo " maaf Pesanan anda ditolak";
                    }elseif ($pesanan['status_pesanan'] == 3) {
                        echo "pesanan telah di batalkan ";
                    }
                    ?>
                </p>
            </div>
        </section>
        <!-- pembayaran nya  -->


        <!-- Tambahkan style CSS untuk ikon WhatsApp -->
        <style>
        .whatsapp-icon {
            display: inline-block;
            position: fixed;
            bottom: 160px;
            right: 170px;
            background: green;
            color: white;
            padding: 15px;
            border-radius: 40%;
            text-align: center;
            cursor: pointer;
            z-index: 9999;

        }

        .whatsapp-con {
            display: inline-block;
            position: fixed;
            bottom: 200px;
            right: 180px;
            color: black;
            padding: 10px;
            text-align: center;
            cursor: pointer;
            z-index: 9999;
        }
        </style>


        <?php
// Mendapatkan data informasi pemesanan
$nomor_pesanan = $pesanan['id_pesanan'];
$alamat_pengiriman = $pesanan['alamat'];
$jenis_pengiriman = $pesanan['jenis_pengiriman'];
$pembayaran = $pesanan['pembayaran'];
$total_pembayaran = number_format($totalbelanja);

// Membuat teks pesan dengan data informasi pemesanan
$pesan = "Halo admin tabonay,\nSaya ingin memesan dengan detail sebagai berikut:\n\n";
$pesan .= "Nomor Pesanan: ".$nomor_pesanan."\n";
$pesan .= "Alamat Pengiriman: ".$alamat_pengiriman."\n";
$pesan .= "Jenis Pengiriman: ".$jenis_pengiriman."\n";
$pesan .= "Metode Pembayaran: ".$pembayaran."\n";
$pesan .= "Total Pembayaran: Rp.".$total_pembayaran."\n\n";

// Menambahkan detail produk
$nomor_produk = 1;
foreach ($_SESSION["keranjang"] as $id_produk => $jumlah) {
  $ambil_produk = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
  $data_produk = $ambil_produk->fetch_assoc();
  $nama_produk = $data_produk['nama_produk'];
  $harga_produk = number_format($data_produk['harga']);
  $subharga_produk = number_format($data_produk['harga'] * $jumlah);

  $pesan .= "Produk ".$nomor_produk.": ".$nama_produk."\n";
  $pesan .= "Harga: Rp.".$harga_produk."\n";
  $pesan .= "Jumlah: ".$jumlah."\n";
  $pesan .= "Subtotal: Rp.".$subharga_produk."\n\n";

  $nomor_produk++;
}

// Mengganti karakter khusus untuk URL WhatsApp
$pesan_encoded = urlencode($pesan);
?>
        <h4 class="whatsapp-con">
            Kirim pesanan:
        </h4>

        <!-- Tambahkan ikon WhatsApp dengan link dan pesan yang ditentukan -->
        <a href="https://wa.me/+6281397481172?text=<?php echo $pesan_encoded; ?>" target="_blank">
            <div class="whatsapp-icon">
                <i class="fa fa-whatsapp"></i> <!-- Ganti dengan ikon WhatsApp yang sesuai -->
            </div>
        </a>

        <!-- Tombol Kembali -->
        <button type="button" class="btn btn-primary" onclick="location.href='index.php'">Kembali</button>
        <button type="button" class="btn btn-danger"
            onclick="location.href='hapuskeranjang.php?id=<?php echo $id_produk ?>'">batalkan pesanan</button>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
    </body>

    </html>