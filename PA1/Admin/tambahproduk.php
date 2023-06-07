<h2>Tambah Produk </h2>
<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>



<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>nama</label>
        <input type="text" class="form-control" name="nama">
    </div>
    <div class="form-group">
        <label>Harga (Rp)</label>
        <input type="number" class="form-control" name="harga">
    </div>
    <div class="form-group">
        <label>Stok</label>
        <input type="number" class="form-control" name="stok">
    </div>
    <div class="form-group">
        <label>gambar</label>
        <input type="file" class="form-control" name="foto">
    </div>
    <div class="form-group">
        <label>deskripsi</label>
        <textarea class="form-control" name="deskripsi" id="editor" rows="10"></textarea>
    </div>
    <button class="btn btn-success" name="save">simpan</button>
</form>
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
<?php
if(isset($_POST['save'])){
    $nama= $_FILES['foto']['name'];
    $lokasi =$_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasi,"../images/".$nama);
$koneksi->query("INSERT INTO produk
(nama_produk,harga,stok,gambar,deskripsi)VALUES ('$_POST[nama]','$_POST[harga]','$_POST[stok]','$nama','$_POST[deskripsi]')");
echo"<div class='alert alert-info'>Data tersimpan</div>";
echo "<meta http-equiv='refresh'content='1;url=indexadmin.php?halaman=produk'>";
}

?>