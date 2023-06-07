<h2>testimonial produk</h2>

<a href="indexadmin.php?halaman=tambahtestimoni" class="btn btn-success">Tambah</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>no</th>
            <th>Nama</th>
            <th>gambar</th>
            <th>deskripsi</th>
        </tr>
    </thead>
    <tbody>
        <?php $id=1; ?>
        <?php $ambil=$koneksi->query("SELECT * FROM testimoni");?>
        <?php while($pecah = $ambil->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $id;?></td>
            <td><?php echo $pecah['Nama'];?></td>
            <td><img src="../images/<?php echo $pecah['gambar'];?>" alt="" width="100px"></td>
            <td><?php echo $pecah['deskripsi'];?></td>
            <td>

                <a href="indexadmin.php?halaman=ubah_testimoni&id=<?php echo $pecah['id_testimoni'];?>"
                    class="btn-info btn"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                <a href="indexadmin.php?halaman=hapus_testimoni&id=<?php echo $pecah['id_testimoni'];?>"
                    class="btn-danger btn"><i class="fa fa-trash" aria-hidden="true"> </i></a>
            </td>
        </tr>
        <?php $id++?>
        <?php } ?>
    </tbody>
</table>