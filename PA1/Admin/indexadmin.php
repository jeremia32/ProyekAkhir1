<!-- koneksike data base menggunakan oop -->
<?php
$koneksi = new mysqli("localhost","root","","umkm");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>halaman Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/costom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>


</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="../index.php"><span
                        style="font-family: 'Arial Black', sans-serif; color: #dcd2d2; text-shadow: 2px 2px 4px #000000;">Tabonay
                        admin</span></a>

            </div>

        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">

                        <img src="assets/img/admin.png" class=" user-image img-responsive "
                            style="background: #202020;" />

                    </li>
                    <li><a href="indexadmin.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a> </li>
                    <li><a href="indexadmin.php?halaman=produk"><i class="fa fa-shopping-bag fa-3x"></i> produk</a></li>
                    <li><a href="indexadmin.php?halaman=pembelian"><i class="fa fa-shopping-basket  fa-3x"></i>
                            Pembelian</a>
                    </li>
                    <li><a href="indexadmin.php?halaman=pelanggan"><i class="fa fa-user-o fa-3x"></i> Pelanggan</a>
                    </li>
                    <li><a href="indexadmin.php?halaman=testimonial"><i class="fa fa-comments-o fa-3x"></i>
                            testimonial</a>
                    </li>
                    <li><a href="indexadmin.php?halaman=logout"><i class="fa fa-sign-out fa-3x"></i> Logout</a></li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <?php
                if(isset($_GET['halaman']))
                {
                    if($_GET['halaman']=="produk")
                    {
                        include 'produk.php';
                    }
                    elseif($_GET['halaman']=="pembelian")
                    {
                        include 'pembelian.php';
                    }
                    elseif($_GET['halaman']=="hapuspembelian")
                    {
                        include 'hapus_pembelian.php';
                    }
                    elseif($_GET['halaman']=="pelanggan")
                    {
                        include 'pelanggan.php';
                    }
                    elseif($_GET['halaman']=="hapuspelanggan")
                    {
                        include 'hapus_pelanggan.php';
                    }
                    elseif($_GET['halaman']=='tambahproduk')
                    {
                        include 'tambahproduk.php';
                    }
                    elseif($_GET['halaman']=='hapusproduk')
                    {
                        include 'hapusproduk.php';
                    } 
                    elseif($_GET['halaman']=='ubahproduk')
                    {
                        include 'ubahproduk.php';
                    } 
                    elseif($_GET['halaman']=='testimonial')
                    {
                        include 'testimonial.php';
                    } 
                    elseif($_GET['halaman']=='ubah_testimoni')
                    {
                        include 'ubah_testimoni.php';
                    } 
                    elseif($_GET['halaman']=='hapus_testimoni')
                    {
                        include 'hapus_testimoni.php';
                    } 
                    elseif($_GET['halaman']=='tambahtestimoni')
                    {
                        include 'tambahtestimoni.php';
                    } 
                    elseif($_GET['halaman']=='logout')
                    {
                        include 'logout.php';
                    } 
                    
                }
                else
                {
                    include 'home.php';
                }
                ?>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- MORRIS CHART SCRIPTS -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

</body>

</html>