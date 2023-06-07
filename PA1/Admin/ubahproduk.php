<h2>ubahproduk</h2>
<?php 
 $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
 $pecah = $ambil->fetch_assoc();


?>
<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>nama produk</label>
        <input type="text" class="form-control" name="nama" value="<?php echo $pecah ['nama_produk']; ?>">
    </div>
    <div class="form-group">
        <label>harga</label>
        <input type="number" class="form-control" name="harga" value="<?php echo $pecah ['harga']; ?>">
    </div>
    <div class="form-group">
        <label>Stok</label>
        <input type="number" class="form-control" name="stok" value="<?php echo $pecah ['stok']; ?>">
    </div>
    <div class="form-group">
        <img src="../images/<?php echo $pecah['gambar'];
    ?>" width="200px">
    </div>
    <div class="form-group">
        <label>ganti foto</label>
        <input type="file" class="form-control" name="foto">
    </div>
    <div class="form-group">
        <label>deskripsi</label>
        <textarea class="form-control" name="deskripsi" id="editor" rows="10">
        <?php echo $pecah['deskripsi']?>
    </textarea>
    </div>
    <button class="btn btn-success" name="ubah">ubah</button>
</form>

<?php 
if(isset($_POST['ubah']))
{
    $namafoto=$_FILES ['foto']['name'];
    $lokasifoto = $_FILES ['foto']['tmp_name'];
    // jika foto diubah
    if(!empty($lokasifoto))
    {
        move_uploaded_file($lokasifoto,"../images/$namafoto");

        $koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]',harga='$_POST[harga]',
        stok ='$_POST[stok]',gambar='$namafoto',deskripsi = '$_POST[deskripsi]' WHERE id_produk='$_GET[id]'");
    }
    else
    {
        $koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]',harga='$_POST[harga]',
        stok ='$_POST[stok]',gambar='$namafoto',deskripsi = '$_POST[deskripsi]' WHERE id_produk='$_GET[id]'");
    }
    echo"<script>alert('Data produk telah di ubah');</script>";
echo"<script>location='indexadmin.php?halaman=produk';</script>";
}

?>

<script>
ClassicEditor
    .create(document.querySelector('#editor'))
    .then(editor => {
        console.log(editor);
    })
    .catch(error => {
        console.error(error);
    });
</script>