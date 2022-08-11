<?php
session_start();
if (!isset($_SESSION["signin"])) {
   header("Location: ../login.php");
   exit;
}
require '../path/functions.php';

if (isset($_POST["add"])) {

    if (createDataBerita($_POST)> 0) {
        echo " <script>
            alert('Postingan berhasil ditambahkan');
        </script>";
    }else{
        echo mysqli_error($conn);
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
    <link rel="stylesheet" href="../asset/css/bootstrap.css?v=<?= time();?>">
    <link rel="stylesheet" href="../asset/css/custome-login.css?v=<?= time();?>">
    <link rel="stylesheet" href="../asset/css/custom.css?v=<?= time();?>">
    <link rel="stylesheet" href="../asset/css/dasboard.css?v=<?time();?>">
    <link rel="stylesheet" href="../asset/css/bootstrap-grid.min.css.map?v=<?time();?>">

    <!-- Favicons -->
     <!-- Load an icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="asset\img\icon\bootstrap-icons-1.8.1/fonts/bootstrap-icons.woff?v=<?= time();?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
      <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet">
   
    <title>Tambah Berita | Humanity Care - Informasi Mengenasi Mitigasi dan Berita Seputar Bencana Alam</title>
</head>
<body>
   
<!-- The sidebar -->
<div class="sidebar">
<a href="dasboard.php"><i class="fa fa-fw brand"></i>HumanityCare</a>
  <a href="Databerita.php"><i class="fa fa-fw fa-home"></i> Berita</a>
  <a href="Datauser.php"><i class="fa fa-fw fa-users"></i> User</a>
  <a href="Datadonatur.php"><i class="fa fa-fw fa-archive"></i>Donatur</a>
  <a href="logout.php" class="position-absolute bottom-0 start-0"><i class="fa fa-sign-out"></i>Sign out</a>
</div>

<div class="main">
    <h1>Tambah Postingan Laman Berita</h1>
    <form action="" method="post" enctype="multipart/form-data">
<div class="mb-3">
  <label for="username" class="form-label">Judul</label>
  <input type="text" class="form-control" name="judul" id="username" placeholder="Judul Berita" require>
</div>
<div class="mb-3">
  <label for="kategori" class="form-label">Kategori</label>
  <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Kategori"  require> 
</div>
<div class="mb-3">
  <label for="waktu" class="form-label">Waktu Positangan</label>
  <input type="datetime-local" class="form-control" name="waktu" id="waktu" placeholder="Waktu Positangan" require> 
</div>

<div class="mb-3">
  <label for="artikel" class="form-label">Isi Artikel</label>
  <textarea type="text" cols="30" rows="10" class="form-control" name="artikel" id="artikel" placeholder="Isi Artikel" require></textarea>
</div>
<div class="mb-3">
  <label for="name" class="form-label">Author</label>
  <input type="text" class="form-control" name="author" id="name" placeholder="Nama Lengkap" require>
</div>
<div class="mb-3">
    <label for="formFile" class="form-label">Gambar Artikel</label>
    <input class="form-control" type="file" name="gambar" id="formFile">
</div>
<a href="Databerita.php" class="btn btn-primarys " >Batal</a>
<button type="submit" class="btn btn-primarys " name="add">Posting</button>
</form>
</div>
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    

<script type="text/javascript" src="../asset/js/bootstrap.js?v=<?= time();?>"></script>
</body>

</html>