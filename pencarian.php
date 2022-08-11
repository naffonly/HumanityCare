<?php
require 'path/functions.php';

$update = query("SELECT * FROM tb_berita ORDER BY id DESC");

if (isset($_POST["cari"])) {
  $update = cari($_POST["cari"]);
  
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="asset/css/bootstrap.css?v=<?= time();?>">
    <link rel="stylesheet" href="asset/css/custom.css?v=<?= time();?>">
    <link rel="stylesheet" href="asset/css/carousel.css?v=<?= time();?>">

    <!-- Favicons -->
    <link rel="stylesheet" href="asset\img\icon\bootstrap-icons-1.8.1/fonts/bootstrap-icons.woff?v=<?= time();?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
      <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet">
   
    <title>Pencarian | Humanity Care - Informasi Mengenasi Mitigasi dan Berita Seputar Bencana Alam</title>
</head>

<body>

    <!-- navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-3 "> 
      <div class="container-fluid">
          
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand  ms-3" href="index.php">
          <img src="asset/img/ico.ico" alt="" width="30" height="24" class="d-inline-block align-text-top">
          HumanityCare
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
              
            <li class="nav-item">
              <a class="nav-link" href="berita.php">Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="edukasi.php">Edukasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="donasi.php">Donasi</a>
            </li>
          </ul>
        
          <form action="" method="post" class="d-flex">
            <input class="form-control me-2 bg-primarys text-white" style="background-color: #3B3BED;" type="search" name="cari" placeholder="Search" aria-label="Search">
          </form>
        </div>
      </div>
</nav>


      <div class="container m-auto">
       
  <div class="row py-5  ">
    <?php foreach ($update as $row) :?>
      <div class="col ">
        <div class="card m-auto my-5" style="width: 18rem; height: 23rem;">
          <a href="detail.php"><img src="dasboard/img/berita/<?= $row["img_post_news"];?>" class="card-img-top" alt="..."></a>
          <a href="detail.php?id=<?= $row["id"];?>"> 
          <div class="card-body">
            <p class="card-text"><?= $row["waktu_post_news"]." | ". $row["kategori_post_news"];?></p>
            <h5 class="card-text"><?= $row["judul_post_news"];?></h5>
           </div>
          </a>
        </div>
      </div>
    <?php endforeach;?>
  </div> 
      </div>
      
  <!-- Footer -->
    <div class="container-fluid footer-item"> 
      <footer class="py-3 mx-4">
        <ul class="nav justify-content-center pb-3 mb-1">
          <li class="ms-3"><a class="text-muted" href="#" ><i class="bi bi-twitter"></i></a></li>
          <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-facebook" ></i></a></li>
          <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-instagram"></i></i></a></li>
          <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-youtube"></i></a></li>
        </ul>
        <ul class="nav justify-content-center pb-3 mb-1">
        <li class="nav-item"><a href="berita.php" class="nav-link px-2 text-muted">Berita</a></li>
          <li class="nav-item"><a href="edukasi.php" class="nav-link px-2 text-muted">Edukasi</a></li>
          <li class="nav-item"><a href="donasi.php" class="nav-link px-2 text-muted">Donasi</a></li>
        </ul>
        <p class="text-center text-muted">&copy; 2022 HumanityCare, Inc</p>
      </footer>
    </div>
<script type="text/javascript" src="asset/js/bootstrap.js?v=<?= time();?>"></script>
</body>

</html>