<h2>Data produk</h2>

<a href="indexadmin.php?halaman=tambahproduk" class="btn btn-success">Tambah</a>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>no</th>
      <th>Nama</th>
      <th>harga</th>
      <th>stok</th>
      <th>gambar</th>
      <th>deskripsi</th>
      <th>action</th>
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
      <td>
        <div class="apel" style="display: flex">
          <a href="indexadmin.php?halaman=ubahproduk&id=<?php echo $pecah['id_produk'];?>" class="btn-info btn"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>
          <a href="indexadmin.php?halaman=hapusproduk&id=<?php echo $pecah['id_produk'];?>" class="btn-danger btn"><i class="fa fa-trash" aria-hidden="true"> </i></a>
        </div>
      </td>
    </tr>
    <?php $id++?>
    <?php } ?>
  </tbody>
</table>
