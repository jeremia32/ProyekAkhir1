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
$ambil = $koneksi->query("SELECT * FROM users");
$jumlah_pelanggan = mysqli_num_rows($ambil);
?>

<!-- Tampilkan data pelanggan -->
<h2>Data Pelanggan</h2>

<p class="total-customers">
    <i class="fa fa-users" aria-hidden="true">
        <?php echo $jumlah_pelanggan; ?>
    </i>
</p>

<table class="table table-bordered">
    <thead>
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Email</td>
            <td>Status</td>
            <td>Aksi</td>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1 ?>
        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $pecah['username']; ?></td>
            <td><?php echo $pecah['email']; ?></td>
            <td>
                <?php if ($pecah['status'] == 0) {
                    echo "Aktif";
                } else {
                    echo "Tidak Aktif";
                } ?>
            </td>
            <td>
                <?php if ($pecah['status'] == 0) { ?>
                <a href="indexadmin.php?halaman=nonaktifkanpelanggan&id=<?php echo $pecah['id_akun']; ?>"
                    class="btn btn-warning">
                    Nonaktifkan
                </a>
                <?php } else { ?>
                <a href="indexadmin.php?halaman=aktifkanpelanggan&id=<?php echo $pecah['id_akun']; ?>"
                    class="btn btn-success">
                    Aktifkan
                </a>
                <?php } ?>
                <a href="indexadmin.php?halaman=hapuspelanggan&id=<?php echo $pecah['id_akun']; ?>"
                    class="btn btn-danger">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </a>
                <a href="indexadmin.php?halaman=view_pesanan&id=<?php echo $pecah['id_akun']; ?>" class="btn btn-info">
                    View Pemesanan
                </a>
            </td>
        </tr>
        <?php } ?>

        <style>
        .total-customers {
            background-color: #7d8286;
            color: white;
            padding: 10px;
            border-radius: 5px;
            display: inline-block;
            float: right;
        }
        </style>
    </tbody>
</table>