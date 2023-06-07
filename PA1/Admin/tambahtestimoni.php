<h2>Tambah testimoni </h2>
<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="namatesti">
    </div>
    <div class="form-group">
        <label>gambar</label>
        <input type="file" class="form-control" name="foto">
    </div>
    <div class="form-group">
        <label>deskripsi</label>
        <textarea class="form-control" name="deskripsi" id="editor" ows="10"></textarea>
    </div>
    <button class="btn btn-success" name="save">simpan</button>
</form>
<?php
if(isset($_POST['save'])){
    $nama= $_FILES['foto']['name'];
    $lokasi =$_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasi,"../images/".$nama);
$koneksi->query("INSERT INTO testimoni
(Nama,gambar,deskripsi)VALUES ('$_POST[namatesti]','$nama','$_POST[deskripsi]')");
echo"<div class='alert alert-info'>Data tersimpan</div>";
echo "<meta http-equiv='refresh'content='1;url=indexadmin.php?halaman=testimonial'>";
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