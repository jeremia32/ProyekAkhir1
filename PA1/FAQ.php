<!DOCTYPE html>
<html>

<head>
    <title>Halaman FAQ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>
    .kiri {
        position: fixed;
        bottom: 2rem;
        left: 2rem;
    }

    .kiri i {
        font-size: 20px;
        color: white;
        padding: 13px;
        background: orange;
        border-radius: 2rem;
    }

    .kiri i:hover {
        opacity: 0.8;
        background-color: rgb(70, 67, 67);
        color: rgb(215, 212, 206);
        border: 2px solid rgb(227, 223, 215);
        transition: 1s;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Bagaimana Cara Memesan
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Cara Memesan 1</a>
                            <a class="dropdown-item" href="#">Cara Memesan 2</a>
                            <a class="dropdown-item" href="#">Cara Memesan 3</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <a href="#" class="kiri" data-toggle="modal" data-target="#myModal">
        <i class="fa fa-question-circle"></i>
    </a>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <!-- Isi modal -->
    </div>

    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
</body>

</html>