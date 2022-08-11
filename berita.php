<?php
require 'path/functions.php';
$berita = query("SELECT * FROM tb_berita ORDER BY id DESC LIMIT 100 offset 1");
$update = query("SELECT * FROM tb_berita ORDER BY id DESC LIMIT 1");
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
    <style>
      a{
        color : white;
      }
      a:hover{
        color : whitesmoke;
      }
    </style>
    <title> Berita | Humanity Care - Informasi Mengenasi Mitigasi dan Berita Seputar Bencana Alam</title>
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
                <a class="nav-link " style="width: 90px; text-align: center; color: white; background-color: #3B3BED; border-radius: 50px;" href="#">Berita</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="edukasi.php">Edukasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="donasi.php">Donasi</a>
              </li>
            </ul>
            <form class="d-flex" action="pencarian.php" method="post">
              <input class="form-control me-2 bg-primarys text-white" style="background-color: #3B3BED;"   type="search" name="cari" placeholder="Cari" aria-label="Search" >
            </form>
          </div>
        </div>
   
  </nav>
  <div class="ctn-head1" style="margin: auto; width: 69%; margin-top: 2%;">
    <h3 style="margin-left: 25px; color: #3B3BED;">Berita</h3>
    <hr style="height: 5px; color: #3B3BED;">
  </div>


  <div class="container bg-berita" style="width: 70%;">
    <!-- PERTAMA -->
  
    <div class="row m-5 pt-4">
    <?php foreach ($update as $row) :?>
        <div class="col m-auto">
            <div class="card-berita mb-3">
                    <div class="row" style="margin-top: 40px;">
                      <div class="col-12 col-md-4 m-auto" >
                        <img src="dasboard/img/berita/<?= $row["img_post_news"];?>" width="150px" class="card-img-top " alt="..." style="border-radius: 17px;">
                      </div>
                      <div class="col-md-8 " style=" border-bottom: 3px solid white;border-top: 3px solid white;">
                        <a href="detail.php?id=<?= $row["id"];?>">
                        <div class="card-body">
                          <p style="color: white;"><?= $row["waktu_post_news"];?></p>
                          <h5 class="card-title" style="color: white;"> [UPDATE] <?= $row["judul_post_news"];?></h5>
                          <p class="card-text" style="color: white;"><?= limit_text($row["artikel_post_news"],30)?></p>
                        </div></a>
                      </div>
                    </div>
                </div>
         </div>
         <?php endforeach ; ?>
       
    </div>
    
  
    <!-- mINI -->
    <div class="row my-4 d-flex">
    <?php foreach ($berita as $row) :?>
      <div class="col mb-3">
        <div class=" card-berita m-auto m-2 mb-3 bg-transparent text-white" style="width: 18rem; height:100%; border-bottom: 3px solid white;">
          <img src="dasboard/img/berita/<?= $row["img_post_news"];?>" width="150px" class="card-img-top" alt="..." style=" border-radius: 17px;">
          <a href="detail.php?id=<?= $row["id"];?>"> 
          <div class="card-body">
          
            <p class="card-text"><?= $row["waktu_post_news"]." | ". $row["kategori_post_news"];?></p>
            <p class="card-text"><?= $row["judul_post_news"];?></p>
          </div>
          </a>
        </div>
      </div>
      <?php endforeach ; ?>
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
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Berita</a></li>
          <li class="nav-item"><a href="edukasi.php" class="nav-link px-2 text-muted">Edukasi</a></li>
          <li class="nav-item"><a href="donasi.php" class="nav-link px-2 text-muted">Donasi</a></li>
      </ul>
      <p class="text-center text-muted">&copy; 2022 HumanityCare, Inc</p>
    </footer>
  </div>
<script type="text/javascript" src="asset/js/bootstrap.js?v=<?= time();?>"></script>
</body>

</html>