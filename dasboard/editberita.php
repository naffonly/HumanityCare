<?php
session_start();
if (!isset($_SESSION["signin"])) {
   header("Location: ../login.php");
   exit;
}
require '../path/functions.php';
$id = $_GET["id"];
$berita = query("SELECT * FROM tb_berita WHERE id = $id")[0];
 

if (isset($_POST["add"])) {
    
    if (updateDataBerita($_POST)>0) {
        echo "
            <script>
                alert('data berhasil diubah');
                
            </script>
        ";
    }else{
        echo "
            <script>
                alert('data gagal diubah');
               
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
   
    <title>Edit Postingan Berita | Humanity Care - Informasi Mengenasi Mitigasi dan Berita Seputar Bencana Alam</title>
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
    <h1>Edit Postingan Berita</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <!-- //hidden -->
    <input type="hidden" name="id" value="<?= $berita["id"]?>">
    <input type="hidden" name="gambarawal" value="<?= $berita["img_post_news"]?>">
<div class="mb-3">
  <label for="judul" class="form-label">Judul</label>
  <input type="text" class="form-control" name="judul" id="judul" value="<?= $berita["judul_post_news"]?>" require>
</div>
<div class="mb-3">
  <label for="kategori" class="form-label">Kategori</label>
  <input type="text" class="form-control" name="kategori" id="kategori" value="<?= $berita["kategori_post_news"]?>"  require> 
</div>

<div class="mb-3">
  <label for="waktu" class="form-label">Waktu Postingan</label>
  <input type="datetime-local" class="form-control" name="waktu" id="waktu" value="<?= date("c",strtotime($berita["waktu_post_news"]));?>" require> 
</div>

<div class="mb-3">
  <label for="artikel" class="form-label">Isi Artikel</label>
  <textarea type="text" cols="30" rows="10" class="form-control" name="artikel" id="artikel" require><?= $berita["artikel_post_news"]?></textarea>
</div>
<div class="mb-3">
  <label for="author" class="form-label">Author</label>
  <input type="text" class="form-control" name="author" id="author" value="<?= $berita["author_post_news"]?>"  require>
</div>
<div class="mb-3">
    <label for="formFile" class="form-label">Gambar Artikel</label><br>
    <img src="img/berita/<?= $berita['img_post_news'];?>" class="img-thumbnail"><br>
    <input class="form-control" type="file" name="gambar" id="formFile" >
</div>
<a href="Databerita.php" class="btn btn-primarys " >Batal</a>
<button type="submit" class="btn btn-primarys " name="add">Update</button>
</form>
</div>
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    

<script type="text/javascript" src="../asset/js/bootstrap.js?v=<?= time();?>"></script>
</body>

</html>