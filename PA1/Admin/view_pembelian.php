<?php
// Ambil id pembelian dari URL
$id_pembelian = $_GET['id'];

// Query untuk mendapatkan data pembelian berdasarkan id
$query = $koneksi->query("SELECT * FROM pemesanan WHERE id_pesanan = '$id_pembelian'");
$pembelian = $query->fetch_assoc();
?>

<h2>Detail Pembelian</h2>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama Produk</th>
        <th>Gambar</th>
        <th>Jumlah</th>
        <th>Harga</th>
        <th>Subtotal</th>
    </tr>
    <?php
    $no = 1;
    $total = 0;

    // Query untuk mendapatkan data produk yang dibeli dalam pembelian ini
    $query_produk = $koneksi->query("SELECT * FROM pemesanan_produk dp JOIN produk p ON dp.id_produk = p.id_produk WHERE dp.id_pesanan = '$id_pembelian'");
    while ($data_produk = $query_produk->fetch_assoc()) {
        $subtotal = $data_produk['harga'] * $data_produk['jumlah'];
        $total += $subtotal;
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $data_produk['nama_produk']; ?></td>
        <td> <img src="../images/<?php echo  $data_produk['gambar'];?>" style="width: 7rem;"></td>

        <td><?php echo $data_produk['jumlah']; ?></td>
        <td>Rp <?php echo number_format($data_produk['harga']); ?></td>
        <td>Rp <?php echo number_format($subtotal); ?></td>
    </tr>
    <?php } ?>
    <tr>
        <td colspan="5" align="right"><strong>Total Pembelian:</strong></td>
        <td><strong>Rp <?php echo number_format($total); ?></strong></td>
    </tr>
</table>

<h2>Informasi Pembelian</h2>
<table class="table table-bordered">
    <tr>
        <th>Tanggal Pesanan</th>
        <td><?php echo $pembelian['tanggal_pesanan']; ?></td>
    </tr>
    <tr>
        <th>Alamat Pengiriman</th>
        <td><?php echo $pembelian['alamat']; ?></td>
    </tr>
    <tr>
        <th>Jenis Pengiriman</th>
        <td><?php echo $pembelian['jenis_pengiriman']; ?></td>
    </tr>
    <tr>
        <th>Status Pesanan</th>
        <td>
            <?php
            if ($pembelian['status_pesanan'] == 1) {
                echo '<span class="status-konfirmasi">Diterima</span>';
            } else if ($pembelian['status_pesanan'] == 2) {
                echo '<span class="status-belum-konfirmasi">Ditolak</span>';
            } else if ($pembelian['status_pesanan'] == 3) {
                echo '<span class="status-belum-konfirmasi">Dibatalkan Pelanggan</span>';
            } else {
                echo 'Menunggu';
            }
            ?>
        </td>
    </tr>
</table>

<a href="indexadmin.php?halaman=pembelian" class="btn btn-primary">Ke Halaman Pembelian</a>