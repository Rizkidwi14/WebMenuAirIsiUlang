<?php
session_start();

//ceklogin
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';
$produk = query("SELECT * FROM produk ORDER BY id DESC");
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>RO Health OXY</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">


    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">

    <style>
        .textJustify {
            text-align: justify;
            text-justify: inter-word;
        }
    </style>
</head>

<body class="bg-light">
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <div class="me-2">
                    <img src="pictures/RO.png" width="100px" alt="...">
                </div>
                <a class="navbar-brand" href="index.php">RO Health OXY</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">

                        <?php if ($_SESSION["level"] == "admin") { ?>
                            <li class="nav-item   ">
                                <a class="nav-link" aria-current="page" href="admin.php">Admin</a>
                            </li>
                        <?php } ?>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://api.whatsapp.com/send?phone=6282210412635">Order</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav px-3">
                        <li class="nav-item text-nowrap">
                            <?php if (!isset($_SESSION["login"])) { ?>
                                <a class="nav-link" href="login.php">Login</a>
                            <?php } else { ?>
                                <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container mt-3">
            <!-- START THE FEATURETTES -->
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="text-center fw-bold">Tentang Produk</h1>
                    <hr class="featurette-divider">
                </div>
            </div>
            <div class="textJustify row justify-content-center">
                <div class="col-7 fs-3 fw-semibold">
                    <h2 class="text-center">RO Health OXY</h2>
                    <p>
                        Air minum isi ulang ini memiliki keunggulan dengan air yang bersih dan higienis, kami memproduksi airnya sendiri dengan mesin untuk diolah semaksimal mungkin agar bersih karena untuk kesehatan, dan Manfaat Air RO Health OXY yaitu:
                    </p>
                    <ul>
                        <li>Membantu proses pencernaan</li>
                        <li>Menjaga stabilitas suhu tubuh dan keseimbangan</li>
                        <li>Membantu proses penyerapan zat makanan ke dalam tubuh</li>
                        <li>Membuang racun</li>
                        <li>Membantu peredaran darah</li>
                        <li>Pemeliharaan kulit.</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>