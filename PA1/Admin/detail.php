<h2>Detail Pembelian</h2>
<?php
$ambil = $koneksi->query("SELECT * FROM pemesanan JOIN users ON users.id_akun = pemesanan.akun_id  WHERE pemesanan.id_pesanan = '$_GET[id]'");
$detail = $ambil->fetch_assoc();
?>
<p>
    <strong>Nama Pelanggan:</strong> <?php echo $detail['username'];?>
    <br>
    <strong>Tanggal Pesanan:</strong> <?php echo $detail['tanggal_pesanan'];?>
    <br>
    <strong>Total:</strong> <?php echo $detail['total'];?>
</p>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $ambil_produk = $koneksi->query("SELECT * FROM pemesanan_produk JOIN produk ON pemesanan_produk.id_produk = produk.id_produk WHERE pemesanan_produk.id_pesanan = '$_GET[id]'");
        $no = 1;
        while($pecah_produk = $ambil_produk->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $pecah_produk['nama_produk'];?></td>
            <td><?php echo $pecah_produk['harga'];?></td>
            <td><?php echo $pecah_produk['jumlah'];?></td>
            <td><?php echo $pecah_produk['harga']*$pecah_produk['jumlah'];?></td>
        </tr>
        <?php }?>
    </tbody>
</table>