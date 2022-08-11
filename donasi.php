<?php
require 'path/functions.php';

$berita = query("SELECT * FROM tb_berita");

if (isset($_POST["cari"])) {
  $berita = cari($_POST["cari"]);
}

if (isset($_POST["submit"])) {
    
  if (createDataDonasi($_POST)>0) {
      echo "
          <script>
              alert('data berhasil ditambahkan, harap tunggu konfirmasi dari pihak kami melalui whatapps');
          </script>
      ";
  }else{
      echo "
          <script>
              alert('data gagal ditambahkan');
          </script>
      ";
  }
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
    <title> Donasi | Humanity Care - Informasi Mengenasi Mitigasi dan Berita Seputar Bencana Alam</title>
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
                    <a class="nav-link" style="width: 90px; text-align: center; color: white; background-color: #3B3BED; border-radius: 50px;" href="#">Donasi</a>
                  </li>
                </ul>
                <form action="pencarian.php" class="d-flex" method="post"> 
      
                  <input name="cari" class="form-control me-2 bg-primarys text-white" style="background-color: #3B3BED;" type="search" placeholder="Cari" aria-label="Search">
                </form>
              </div>
            </div>
      </nav>


<!-- GAMBAR-->
<div class="container">
  <img src="asset/img/donasi.jpg" alt="donasi" width="100%" height="280"></div>
 <br><br>

<!-- FORM ISIANNYA-->
<div class="container p-2">
   <form action="" method ="post" enctype="multipart/form-data">
     <!--INPUT NAMA-->
     <div class="form-group">
      <B><I><label for="exampleInputPassword1"class="col-sm-3 col-form-label">Nama Lengkap</label></I></B>
       <input type="text" class="form-control" name="nama" id="formGroupExampleInput" placeholder="Tuliskan nama pengirim">
    
     <br>
       <!--INPUT EMAIL-->
      
        <B><I><label for="exampleInputEmail1" class="col-sm-3 col-form-label">E-mail</label></I></B>
         <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Tuliskan alamat email">
     
       <br>
         
      <!--INPUT ALAMAT-->
      <div class="mb-3">
        <B><I> <label for="exampleFormControlTextarea1" class="form-label">Alamat</label></I></B>
         <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3" placeholder="Tuliskan alamat domisili pengirim"></textarea>
       </div>

    <!--INPUT NO.TEL-->
     
    <B><I><label for="exampleInputPassword1"class="col-sm-3 col-form-label">No Telfon</label></I></B>
     <input type="text" class="form-control" name="notelp" id="formGroupExampleInput" placeholder="Masukan nomer telfon yang terdaftar pada ewallet">
 
    <br>
       <!--INPUT NOMINA L-->
      
        <B><i><label class="col-sm-3 col-form-label"> Masukan Nominal yang Diinginkan </label></B> </i>
         <input type="text" class="form-control" style="color: #000;" name="nominal" id='one'  placeholder="Rp. Minimal nominal lima ribu rupiah">
   
       <br>

       <!--BUTTON RUPIAH-->
       <div class="container">
         <!-- 25000 -->
         <div class="row justify-content-center m-auto">
           <div class="col"><button class="btn btn-primary" type="button" id='add' type='button' onclick='ik(this.value);' value='25000' ><h5>25.000</h5></button></div>
           <div class="col"><button class="btn btn-primary" type="button" id='add' type='button' onclick='ik(this.value);' value='50000' ><h5>50.000</h5></button></div>
           <div class="col"><button class="btn btn-primary" type="button" id='add' type='button' onclick='ik(this.value);' value='100000' ><h5>100.000</h5></button></div>        
           <div class="col"><button class="btn btn-primary" type="button" id='add' type='button' onclick='ik(this.value);' value='200000' ><h5>200.000</h5></button></div>
           <div class="col"><button class="btn btn-primary" type="button" id='add' type='button' onclick='ik(this.value);' value='500000' ><h5>500.000</h5></button></div>
           <div class="col"><button class="btn btn-primary" type="button" id='add' type='button' onclick='ik(this.value);' value='1000000' ><h5>1.000.000</h5></button></div>
        </div>

       <br>

       <!--IPUT FOTO BARANG-->
       <div class="mb-3">
          <B><I> <label for="formFile" class="form-label">Foto Barang</label></I></B>
           <input class="form-control" type="file" name="barang" id="formFile">
         </div>

         <!--INPUT PESAN DAN DOA-->
         <div class="mb-3">
          <B><I> <label for="exampleFormControlTextarea1" class="form-label">Doa atau Pesan</label></I></B>
           <textarea class="form-control" name="ket" id="exampleFormControlTextarea1" rows="3" placeholder="Tuliskan disini..."></textarea>
         </div>
   
    
       <!-- Example -->
       <div class="container-fluid">
          <div class="row">
            <div class="col" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img src="asset/img/Gopay-Logo.png" class="img-thumbnail item-content" alt="GoPay " >
               
             </div>
              <div class="col " data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <img src="asset/img/ovo.png" class="img-thumbnail item-content" alt="" >
                </div>
              <div class="col " data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <img src="asset/img/spay.png" class="img-thumbnail item-content" alt=".." >
              
                </div>
              <div class="col " data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <img src="asset/img/dana-logo.jpg" class="img-thumbnail item-content" alt=".." >
               </div>
          </div>

           <!-- Modal -->
           <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
             <div class="modal-dialog">
               <div class="modal-content">
                 <div class="modal-header">
                   <h4 class="modal-title" id="exampleModalLabel">Silahkan Pilih Nomer yang inginkan</h4>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                   GOPAY      : 08811531929 (Safina Pratiwi) <br>
                   OVO        : 08811531929 (Safina Pratiwi)<br>
                   SHOPEE PAY : 08811531929 (Safina P  ratiwi)<br>
                   DANA       : 08811531929 (Safina Pratiwi)<br>
                   <br>
                   
                 </div>
               <br>
                 <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
               </div>
             </div>
           </div>
        </div>
         <div class="container">
          <B><I> <label for="formFile" class="form-label">Bukti Kirim</label></I></B>
          <input class="form-control" type="file" name="bukti" id="formFile">
         </div>
       </div>
       <br>
     
          <center>
            <button type="submit" name="submit" class="btn btn-primary" onclick="return confirm('Apakah data yang anda isi sudah sepenuhnya benar?');">DONASI SEKARANG</button>
          </center>
        
     </div>
   </form>
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
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Donasi</a></li>
    </ul>
    <p class="text-center text-muted">&copy; 2022 HumanityCare, Inc</p>
  </footer>
</div>  
<script type="text/javascript" src="asset/js/bootstrap.js?v=<?= time();?>"></script>
<script type="text/javascript" src="asset/js/custome.js?v=<?= time();?>"></script>
</body>
</html>