<?php
// Inisialisasi koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$database = "umkm";

$koneksi = new mysqli($servername, $username, $password, $database);

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Periksa apakah ID akun telah diberikan
if (isset($_GET['id'])) {
    $id_akun = $_GET['id'];

    // Query untuk mengambil pemesanan berdasarkan ID akun
    $query = "SELECT * FROM pemesanan WHERE akun_id = $id_akun";
    $result = $koneksi->query($query);
    ?>
<h2>View Pemesanan Pelanggan</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>ID Pemesanan</th>
            <th>Tanggal Pemesanan</th>
            <th>Total Pembayaran</th>
            <th>Status Pemesanan</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $no = 1;
            while ($row = $result->fetch_assoc()) {
                ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['id_pesanan']; ?></td>
            <td><?php echo $row['tanggal_pesanan']; ?></td>
            <td>Rp.<?php echo number_format($row['total']); ?></td>
            <td>
                <?php
                        if ($row['status_pesanan'] == 0) {
                            echo "Menunggu Konfirmasi Pembayaran";
                        } elseif ($row['status_pesanan'] == 1) {
                            echo "Pembayaran Diterima, Menunggu Pengiriman";
                        } elseif ($row['status_pesanan'] == 2) {
                            echo "Pesanan Ditolak";
                        } elseif ($row['status_pesanan'] == 3) {
                            echo "Pesanan Dibatalkan";
                        }
                        ?>
            </td>
        </tr>
        <?php
            }
            ?>
    </tbody>
</table>
<?php
} else {
    echo "ID akun tidak diberikan.";
}
?>

<a href="indexadmin.php?halaman=pelanggan" class="btn btn-primary">Ke Halaman pelanggan</a>