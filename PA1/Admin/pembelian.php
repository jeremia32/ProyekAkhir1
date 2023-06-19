<style>
.last-purchase {
    display: flex;
    align-items: center;
    font-size: 24px;
}

.last-purchase-icon {
    margin-right: 10px;
}

.status-konfirmasi {
    color: green;
}

.status-belum-konfirmasi {
    color: red;
}
</style>

<h2>Data Pembelian</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Status pesanan</th>
            <th>Tanggal pesanan</th>
            <th>Alamat</th>
            <th>Jenis Pengiriman </th>
            <th>Total</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $ambil = $koneksi->query("SELECT * FROM pemesanan JOIN users ON pemesanan.akun_id = users.id_akun ORDER BY tanggal_pesanan DESC");
        $no = 1;
        $totalPenjualan = 0;
        $pembelianTerakhir = null;
        while ($pecah = $ambil->fetch_assoc()) {
            $totalPenjualan += $pecah['total'];
            if ($no === 1) {
                $pembelianTerakhir = $pecah;
            }
            ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $pecah['username']; ?></td>
            <td>
                <?php
                    if ($pecah['status_pesanan'] == 1) {
                        echo '<span class="status-konfirmasi">Diterima</span>';
                    } else if ($pecah['status_pesanan'] == 2) {
                        echo '<span class="status-belum-konfirmasi">Ditolak</span>';
                    }
                else if ($pecah['status_pesanan'] == 3) {
                    echo '<span class="status-belum-konfirmasi">dibatalkan pelanggan</span>';
                }
                    else {
                        echo 'Menunggu';
                    }
                    ?>
            </td>
            <td><?php echo $pecah['tanggal_pesanan']; ?></td>
            <td><?php echo $pecah['alamat']; ?></td>
            <td><?php echo $pecah['jenis_pengiriman']; ?></td>
            <td>Rp <?php echo number_format($pecah['total']); ?></td>
            <td>
                <?php
                if ($pecah['status_pesanan'] == 0) { // Menampilkan tombol verifikasi hanya untuk pesanan yang belum diverifikasi
                ?>
                <a href="terima.php?id=<?php echo $pecah['id_pesanan']; ?>" class="btn btn-success btn-sm">
                    Terima
                </a>
                <a href="konfirmasipembelian.php?id=<?php echo $pecah['id_pesanan']; ?>" class="btn btn-danger btn-sm">
                    Tolak
                </a>
                <?php
                }
                ?>
                <?php
                if ($pecah['status_pesanan'] == 1) {
                ?>
                <a href="terima.php?id=<?php echo $pecah['id_pesanan']; ?>" class="btn btn-success btn-sm" disabled>
                    Terima
                </a>
                <a href="konfirmasipembelian.php?id=<?php echo $pecah['id_pesanan']; ?>" class="btn btn-danger btn-sm"
                    disabled>
                    Tolak
                </a>
                <?php } ?>
                <?php
                if ($pecah['status_pesanan'] == 2) {
                    ?>
                <a href="terima.php?id=<?php echo $pecah['id_pesanan']; ?>" class="btn btn-success btn-sm" disabled>
                    Terima
                </a>
                <a href="konfirmasipembelian.php?id=<?php echo $pecah['id_pesanan']; ?>" class="btn btn-danger btn-sm"
                    disabled>
                    Tolak
                </a>
                <?php } ?>
                <a href="indexadmin.php?halaman=hapuspembelian&id=<?php echo $pecah['id_pesanan']; ?>"
                    class="btn btn-danger btn-sm">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </a>
                <a href="indexadmin.php?halaman=view_pembelian&id=<?php echo $pecah['id_pesanan']; ?>"
                    class="btn btn-primary btn-sm">
                    <i class="fa fa-cogs" aria-hidden="true"></i>
                </a>
            </td>
        </tr>
        <?php } ?>
        <tr>
            <td colspan="6"><strong>Total Penjualan Keseluruhan:</strong></td>
            <td>Rp<?php echo number_format($totalPenjualan); ?></td>
            <td></td>
        </tr>
    </tbody>
</table>
<!-- Bagian HTML lainnya -->
<p class="last-purchase">
    <span class="last-purchase-icon"><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span>
    Pembelian terakhir: <?php echo $pembelianTerakhir['tanggal_pesanan']; ?>
</p>
<style>
.last-purchase {
    display: flex;
    align-items: center;
    font-size: 24px;
}

.last-purchase-icon {
    margin-right: 10px;
}

.status-konfirmasi {
    color: green;
}

.status-belum-konfirmasi {
    color: red;
}
</style>