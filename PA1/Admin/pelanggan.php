<h2>Data pelanggan</h2>

<?php 
$ambil = $koneksi->query("SELECT * FROM users"); $jumlah_pelanggan = mysqli_num_rows($ambil); ?>
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
            <td>Aksi</td>
        </tr>
    </thead>
    <tbody>
        <?php $no=1 ?>
        <?php while($pecah = $ambil->fetch_assoc()){?>
        <tr>
            <td><?php echo $no++?></td>
            <td><?php echo $pecah['username'];?></td>
            <td><?php echo $pecah['email'];?></td>
            <td>
                <a href="indexadmin.php?halaman=hapuspelanggan&id=<?php echo $pecah['id_akun'];?>"
                    class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"> </i></a>
            </td>
        </tr>
        <?php }?>

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