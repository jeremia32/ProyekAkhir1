<?php
session_start();
// koneksi ke dalam database 
$koneksi = new mysqli("localhost","root","","umkm");
?>

<?php
$id_produk = $_GET["id"];
$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
$detail = $ambil->fetch_assoc();
?>

<!doctype html>
<html lang="en">

<head>
    <title>Detail Produk</title>
    <?php include('header.html'); ?>
</head>

<body>
    <section class="kontent">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="height:35rem; overflow:hidden;">
                    <center>
                        <img src="images/<?php echo $detail['gambar']; ?>" alt="" class="img-fluid rounded"
                            style="width:90%; max-width:100%;height:100%; border-radius: 4rem; ">
                    </center>
                </div>
                <div class=" col-md-6">
                    <h3 class="fw-bold mb-4"><?php echo $detail["nama_produk"]?> </h3>
                    <div class="harga-stok mb-4" style="background-color: rgb(231, 230, 230);">
                        <h4 class="harga">Harga:</h4>
                        <h4 class="harga-value">Rp.<?php echo number_format($detail["harga"]);?></h4>
                        <h4 class="stok">Stok:</h4>
                        <!-- halaman stok yang dimana jika stok nya 0 maka akan muncul pre-order  -->
                        <?php
                        if ($detail["stok"] > 0) {
                            echo "<h4 class='stok-value'>".$detail["stok"]."</h4>";
                        } else {
                            echo "<h4 class='stok-value'>Pre-order</h4>";
                        }
                        ?>
                    </div>
                    <div class="deskripsi mb-4">
                        <h5>Deskripsi:</h5>
                        <h5><?php echo $detail["deskripsi"];?></h5>
                    </div>
                    <form method="post">
                        <div class="form-group">
                            <label for="jumlah">Jumlah:</label>
                            <input type="number" class="form-control" name="jumlah" id="jumlah" min="1"
                                <?php if($detail["stok"] > 0) { echo 'max="'.$detail["stok"].'"'; } ?> required>
                            <div class="input-group-btn mt-2">
                                <button class="btn btn-primary" name="beli" id="beli-btn">Beli Sekarang</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <style>
    .kontent {
        margin-top: 50px;
    }

    .harga-stok {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
    }

    .harga,
    .stok {
        font-weight: bold;
        margin-right: 10px;
    }

    .deskripsi {
        margin-top: 20px;
    }

    #beli-btn {
        background-color: #007bff;
        border: none;
    }

    #beli-btn:hover {
        background-color: #0069d9;
    }
    </style>


    <?php if (isset($_POST["beli"])) {
        //mendapat jumlah yang di input
        $jumlah=$_POST["jumlah"];
        //masukkan keranjang belanja
        $_SESSION["keranjang"][$id_produk]=$jumlah;

        echo"<script>alert('Data anda di simpan ke keranjang');</script>";
        echo"<script>location='keranjang.php';</script>";
    }

    ?>
    </div>
    </div>
    </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>

</html>