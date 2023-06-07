<header class="header_section">
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.php"><img src="images/logo.jpg" alt="#" style="width:
                            8.5rem;" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">tentang</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="product.php">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="testimonial.php">testimoni</a>
                    </li>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="true"> <span class="nav-label">tabonay<span
                                    class="caret"></span></a>
                        <ul class="dropdown-menu">

                            <li>
                                <i class='fa fa-sign-out' style='font-size:11px'>
                                    <a href="login/logout.php">Keluar</a>
                                </i>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="keranjang.php">
                            <i class='fa fa-shopping-cart' style='font-size:24px'>

                                [
                                <?php
if(isset($_SESSION['swtd'])) {
    $total = $_SESSION['swtd'];
    echo $total;
} else {
    echo 0;
}
?>

                                ]

                            </i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

</header>