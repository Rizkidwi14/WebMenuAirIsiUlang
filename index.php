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

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="carousel.css" rel="stylesheet">
</head>

<body>

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
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="pictures/air.jpg" class="d-block w-100">
          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50">
            <h1>RO Health OXY</h1>
            <p>Depot isi ulang air minum</p>
          </div>
        </div>
      </div>
    </div>


    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
      <!-- START THE FEATURETTES -->
      <div>
        <p class="text-center fs-1 fw-bold">Produk</p>
      </div>

      <hr class="featurette-divider">

      <?php $i = 1; ?>
      <?php foreach ($produk as $row) : ?>
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading"><?= $row["nama"]; ?></h2>
            <p class="lead"><?= $row["keterangan"]; ?></p>
            <p class="lead">Rp. <?= number_format($row["harga"], 0, ",", "."); ?></p>
          </div>
          <div class="col-md-5">
            <img src="pictures/produk/<?= $row["foto"]; ?>" width="100%" height="100%">
          </div>
        </div>

        <hr class="featurette-divider">

        <?php $i++; ?>
      <?php endforeach; ?>

      <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->
  </main>


  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>