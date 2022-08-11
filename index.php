<?php

require 'path/functions.php';
$update = query("SELECT * FROM tb_berita ORDER BY id DESC LIMIT 3");
$berita = query("SELECT * FROM tb_berita");

if (isset($_POST["cari"])) {
  $berita = cari($_POST["cari"]);
}?>
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
    <link rel="stylesheet" href="asset\img\icon\bootstrap-icons-1.8.1/fonts/bootstrap-icons.woff">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
      <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet">
    <style>
      a{
        color : #3B3BED;
      }
      a:hover{
        color : #3B3BED;
      }
    </style>
    <title>Humanity Care - Informasi Mengenasi Mitigasi dan Berita Seputar Bencana Alam </title>
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
                <form action="pencarian.php"  class="d-flex" method="post">
                  <input name="cari" class="form-control me-2 bg-primarys text-white" style="background-color: #3B3BED;" type="search" placeholder="Cari" aria-label="Search" >
                </form>
              </div>
            </div>
       
      </nav>

      <div class="position-relative m-auto"  >
        <div class="position-absolute px-5 shadow" style="width: 80%; height: 300px; background-color: #3B3BED; left: 10%; top: 350px; z-index: 3; padding-top: 100px; border-radius: 30px; text-overflow: ellipsis; ">
        <h2 class="text-center text-white">"Bencana alam adalah musibah, akan tetapi menolong korbannya adalah anugrah"</h2>
        </div>
    </div>

      <!-- Slider -->
      <section >
        <div id="myCarousel" class="carousel slide m-0 " data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            
            <div class="carousel-item active ">
              <div class="container-fluid first-image" style="height: 600px;">
              <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"></svg>
              <div class="container">
                <div class=" carousel-caption text-starts">
                  <!--  -->
                </div>
              </div>
            </div>
            </div>
            <div class="carousel-item">
              <div class="container-fluid seccond-image" style="height: 600px;">
              <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"></svg>
      
              <div class="container ">
                <div class="carousel-caption">
                  <!--  -->
                </div>
              </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container-fluid third-image" style="height: 600px;">
              <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"></svg>
      
              <div class="container">
                <div class="carousel-caption text-end">
                 <!--  -->
                </div>
              </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
       </section>

      
     <!-- Bencana alam -->
     <section>
      <div class="container-fluid p-5 bgi" style="margin-top: 150px;">
      <div class="container  my-5 ">
      <div class="row ">
        <div class="col p-3 mx-3">
          <div class="circle-item m-auto bgc-i1">

          </div>
        </div>
        <div class="col p-3 mx-3">
          <a href="http://"><div class="circle-item m-auto bgc-i2"></div> </a>
        </div>
        <div class="col p-3  mx-3">
          <div class="circle-item m-auto bgc-i3"></div> 
        </div>
        <div class="col p-3  mx-3">
          <div class="circle-item m-auto bgc-i4"></div> 
        </div>
        <div class="col p-3  mx-3">
          <div class="circle-item m-auto bgc-i5"></div>
        </div>
        <div class="col p-3  mx-3">
          <div class="circle-item m-auto bgc-i6 "></div> 
        </div>
        <div class="col p-3  mx-3">
          <div class="circle-item m-auto bgc-i7"></div> 
        </div>
        <div class="col p-3  mx-3">
          <div class="circle-item m-auto bgc-i8"></div> 
        </div>
      </div>
    </div>
  </div>
  </section>
  <div class="container-fluid bg-text ">
    <figure class="text-center">
      <blockquote class="blockquote fw-bold">
        <p>"Berbagi bukan tentang seberapa besar dan seberapa 
          berharganya hal yang kau beri, <br>namun seberapa
           tulus dan ikhlasnya apa yang ingin kau beri."</p>
      </blockquote>
     
    </figure>
  </div>
   <!-- Donasi Form -->
  <div class="container-fluid image-btn">
    <div class="btn-center m-auto" >
      <div class="col m-auto mx-2" style="height: 160px;"></div>
      <div class="col m-auto mx-2">
        <a href="donasi.php"><button type="button" class="btn btn-primary btn-lg" >Donasi</button></a>
      </div>
    </div>
  </div>
  <!-- Berita Form -->
  <div class="container ">
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
    <div class="col">
      <div class="m-auto" style="height: 80px; width: 150px;" >
      <a href="berita.php"><button type="button" class="btn btn-primary btn-lg mx-2" >Berita</button></a>
    </div>
    </div>
  </div>
  <!-- Education -->
  <div class="container-fluid  edu-form">
    <div class="container ">
      <div class="row py-5  ">
      <div class="col">
          <a href="edudetail/edu-banjir.php"><div class="card m-auto m-2 text-black" style="width: 18rem;">
            <img src="asset/img/05122017-siaga-bencana-banjir-1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Siaga Bencana Banjir </h5>
            </div>
          </div></a>
        </div>
        <div class="col">
        <a href="edudetail/edu-tsunami.php"><div class="card m-auto m-2 text-black" style="width: 18rem;">
            <img src="asset/img/05122017-siaga-bencana-tsunami-1-2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Siaga Bencana Tsunami</h5>
            </div>
          </div></a>
        </div>
        <div class="col">
        <a href="edudetail/edu-gelombang.php"><div class="card m-auto m-2 text-black" style="width: 18rem;">
            <img src="asset/img/05122017-siaga-bencana-gelombang-pasang-1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Siaga Bencana Gelombang Pasang</h5>
            </div>
          </div></a>
        </div>
    </div>
    <div class="col">
      <div class="m-auto" style="height: 80px; width: 150px;" >
      <a href="edukasi.php"><button type="button" class="btn btn-primary-reverse btn-lg " >Edukasi</button></a>
    </div>
    </div>
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