    <h2>Data produk</h2>

    <a href="indexadmin.php?halaman=tambahproduk" class="btn btn-success">Tambah</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Gambar</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
                <th>Status</th>

            </tr>
        </thead>
        <tbody>
            <?php $id=1; ?>
            <?php $ambil=$koneksi->query("SELECT * FROM produk");?>
            <?php while($pecah = $ambil->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $id;?></td>
                <td><?php echo $pecah['nama_produk'];?></td>
                <td><?php echo $pecah['harga'];?></td>
                <td><?php echo $pecah['stok'];?></td>
                <td><img src="../images/<?php echo $pecah['gambar'];?>" alt="" width="100px" /></td>
                <td><?php echo $pecah['deskripsi'];?></td>
                <td><?php echo ($pecah['status'] == 1) ? 'Aktif' : 'Nonaktif'; ?></td>
                <td>
                    <div class="apel" style="display: flex">
                        <?php if ($pecah['status'] == 1) { ?>
                        <a href="indexadmin.php?halaman=nonaktifkanproduk&id=<?php echo $pecah['id_produk'];?>"
                            class="btn-warning btn"><i class="fa fa-times" aria-hidden="true"></i> Nonaktifkan</a>
                        <?php } else { ?>
                        <a href="indexadmin.php?halaman=aktifkanproduk&id=<?php echo $pecah['id_produk'];?>"
                            class="btn-success btn"><i class="fa fa-check" aria-hidden="true"></i> Aktifkan</a>
                        <?php } ?>
                        <a href="indexadmin.php?halaman=ubahproduk&id=<?php echo $pecah['id_produk'];?>"
                            class="btn-info btn"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>

                    </div>
                </td>
            </tr>
            <?php $id++?>
            <?php } ?>
        </tbody>
    </table>
    <style>
@media (min-width: 415px) {
    .table-bordered {
        width: 100%;
        font-size: x-small;
    }
}
    </style>