<h2>Testimonial Produk</h2>

<a href="indexadmin.php?halaman=tambahtestimoni" class="btn btn-success">Tambah</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Gambar</th>
            <th>Deskripsi</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $id = 1; ?>
        <?php $ambil = $koneksi->query("SELECT * FROM testimoni"); ?>
        <?php while($pecah = $ambil->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $pecah['Nama']; ?></td>
            <td><img src="../images/<?php echo $pecah['gambar']; ?>" alt="" width="100px"></td>
            <td><?php echo $pecah['deskripsi']; ?></td>
            <td><?php echo ($pecah['status'] == 1) ? 'Aktif' : 'Tidak Aktif'; ?></td>
            <td>
                <?php if ($pecah['status'] == 1) { ?>
                <a href="indexadmin.php?halaman=nonaktifkantestimoni&id=<?php echo $pecah['id_testimoni']; ?>"
                    class="btn-warning btn"><i class="fa fa-eye-slash" aria-hidden="true"></i> Nonaktifkan</a>
                <?php } else { ?>
                <a href="indexadmin.php?halaman=aktifkantestimoni&id=<?php echo $pecah['id_testimoni']; ?>"
                    class="btn-success btn"><i class="fa fa-eye" aria-hidden="true"></i> Aktifkan</a>
                <?php } ?>

                <a href="indexadmin.php?halaman=ubah_testimoni&id=<?php echo $pecah['id_testimoni']; ?>"
                    class="btn-info btn"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Ubah</a>
                <a href="indexadmin.php?halaman=hapus_testimoni&id=<?php echo $pecah['id_testimoni']; ?>"
                    class="btn-danger btn"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</a>
            </td>
        </tr>
        <?php $id++; ?>
        <?php } ?>
    </tbody>
</table>