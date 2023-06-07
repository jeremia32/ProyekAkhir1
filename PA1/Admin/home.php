<?php
session_start();
//koneksi ke dalam data base 
$koneksi = new mysqli("localhost","root","","umkm");

if(!isset($_SESSION['admin'])) {
    header("location:../login/admin/tabonay.php");
    
    exit();
}
?>

<center>
    <?php
    $ambil = $koneksi->query("SELECT * FROM admin");
    $row = $ambil->fetch_assoc(); // Mengambil nama_lengkap dari hasil query
    $nama_lengkap = $row['nama_lengkap']; // Mengambil nilai atribut 'nama_lengkap'
    ?>
    <h2><span style="font-family: 'Arial Black', sans-serif; color: #ff0000; text-shadow: 2px 2px 4px #000000;">Selamat
            datang <?php echo $nama_lengkap ?></span></h2><br><br>
</center>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />


    <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/costom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- File CSS CKEditor 5 -->
<link rel="stylesheet" href="/path/to/ckeditor5/classic.css">

<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>


</head>

<body>
    <div id="datetime">
        <?php // Set default timezone to Indonesia/Jakarta
date_default_timezone_set('Asia/Jakarta');

// Get current date and time
$datetime = date('l, j F Y - H:i:s');

// Set date and time to the HTML element
echo "<div id='datetime'>$datetime</div>";

?>
    </div>

    <style>
    #datetime {
        position: absolute;
        top: 10px;
        right: 10px;
        color: #fff;
        padding: 10px;
        font-size: 18px;
        font-weight: bold;
        
    }
    </style>

    <center>
        <div class="box">
            <i class="fa fa-shopping-basket "></i>
            <h3>Informasi pembelian </h3>
            <p>Lihat daftar pesanan terbaru dan detailnya di halaman ini untuk memastikan semua transaksi
                pembelian
                terkelola dengan baik.</p>
            <a href="indexadmin.php?halaman=pembelian" class="btn">kunjungi</a>
        </div>
        <div class="box">
            <i class="fa fa-user-o fa-3x"></i>
            <h3>informasi pelanggan </h3>
            <p>Selamat datang di halaman admin pelanggan. Di sini Anda dapat melihat informasi pelanggan yang
                terdaftar.</p>
            <a href="indexadmin.php?halaman=pelanggan" class="btn">kunjungi</a>
        </div>
        <div class="box">
            <i class="fa fa-comments-o fa-3x"></i>
            <h3>Tambahkan testimoni</h3>
            <p>Tambahkan testimoni yang diposting melalui media sosial atau platform lain ke halaman ini untuk
                menampilkan
                pengalaman positif pelanggan.</p>
            <a href="http://localhost/Psw%202/PA1/Admin/indexadmin.php?halaman=testimonial" class="btn">kunjungi</a>
        </div>

    </center>

    <?php
// query SQL untuk mengambil data pembelian dan melakukan penghitungan jumlah pembelian tiap username// query SQL untuk mengambil data pembelian dan melakukan penghitungan jumlah pembelian tiap username
$query = "SELECT username, COUNT(*) as jumlah_pembelian FROM pemesanan JOIN users ON pemesanan.akun_id = users.id_akun GROUP BY username ORDER BY jumlah_pembelian DESC LIMIT 3";


// eksekusi query dan simpan hasilnya dalam variabel $result
$result = $koneksi->query($query);

// menampilkan hasil query
echo "<h2>Username dengan pembelian terbanyak</h2>";
echo "<div class='jere'>";
echo "<table class='table table-bordered'>";
echo "<thead>";
echo "<tr>";
echo "<th>no</th>";
echo "<th>username</th>";
echo "<th>jumlah_pembelian</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

$no = 1;
// menampilkan data hasil query dalam bentuk tabel
while($row = $result->fetch_assoc()){
    echo "<tr>";
    echo "<td>" . $no++ . "</td>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['jumlah_pembelian'] . "</td>";
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";


?>


    <?php
$ambil = $koneksi->query("SELECT SUM(total) AS total_penjualan FROM pemesanan");
$data = $ambil->fetch_assoc();
$totalPenjualan = $data['total_penjualan'];
?>

    <div class="jeremia">
        <i class="fa fa-line-chart" aria-hidden="true"></i>
        
    </div>
    <div class="total-penjualan">
        <p>total penjualan:</p>
        <span>Rp.<?php echo number_format($totalPenjualan); ?></span>
    </div>
    </div>
    </tbody>
    </table>

</body>
<style>
.box {
    display: inline-flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 30px;
    border: 1px solid #ccc;
    border-radius: 5px;
    text-align: center;
    max-width: 280px;
    margin: 0 auto;
    margin-inline: 3.5rem;


}


.box i {
    font-size: 64px;
    margin-bottom: 20px;
}

.box h3 {
    margin-bottom: 10px;
}

.box p {
    margin-bottom: 20px;
}

.box .btn {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border-radius: 5px;
    text-decoration: none;

}

.jere {
    width: 50%;
}

.jeremia {
    font-size: 100px;
    color: #333;
    flex-direction: column;
    align-items: center;


}

.total-penjualan {
    margin-bottom: 10px;
    font-size: 24px;
    color: #333;
    flex-direction: column;
    align-items: center;
}

.total-penjualan p {
    display: inline;
    font-size: 24px;

}




</style>

<script>
// Function to update the clock
function updateClock() {
    // Get the current time
    var now = new Date();
    var hours = now.getHours();
    var minutes = now.getMinutes();
    var seconds = now.getSeconds();

    // Pad the minutes and seconds with leading zeros, if required
    minutes = minutes.toString().padStart(2, '0');
    seconds = seconds.toString().padStart(2, '0');

    // Set the time to the HTML element
    document.getElementById('datetime').innerHTML = now.toLocaleDateString('en-US') + ' - ' + hours + ':' +
        minutes + ':' + seconds;

    // Call the function again after one second
    setTimeout(updateClock, 1000);
}

// Call the function to start the clock
updateClock();
</script>
<!-- File JavaScript CKEditor 5 -->
<script src="/path/to/ckeditor5/ckeditor.js"></script>
</html>