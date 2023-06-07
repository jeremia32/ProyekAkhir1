<h2>Data pembelian</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>no</th>
            <th>username</th>
            <th>status_pesanan</th>
            <th>tanggal pesanan</th>
            <th>total</th>
            <th>action</th>
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
            <td><?php echo $pecah['status_pesanan']; ?></td>
            <td><?php echo $pecah['tanggal_pesanan']; ?></td>
            <td> Rp <?php echo number_format($pecah['total']); ?></td>
            <td>
                <a href="indexadmin.php?halaman=hapuspembelian&id=<?php echo $pecah['id_pesanan']; ?>"
                    class="btn-danger btn"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
        </tr>
        <?php } ?>
        <tr>
            <td colspan="4"><strong>Total Penjualan Keseluruhan:</strong></td>
            <td>Rp<?php echo number_format($totalPenjualan); ?></td>
            <td></td>
        </tr>
    </tbody>
</table>

<!-- Bagian HTML lainnya -->

<p class="last-purchase">
    <span class="last-purchase-icon"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>
    </span>
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
</style>