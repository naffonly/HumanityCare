<?php
session_start();
if (!isset($_SESSION["signin"])) {
   header("Location: ../login.php");
   exit;
}

require '../path/functions.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    
     <!-- CSS -->
     
    <link rel="stylesheet" href="../asset/css/custom.css?v=<?= time();?>">
    <link rel="stylesheet" href="../asset/css/bootstrap.css?v=<?= time();?>">
    <link rel="stylesheet" href="../asset/css/dasboard.css?v=<?time();?>">
    <link rel="stylesheet" href="../asset/css/bootstrap-grid.min.css.map?v=<?time();?>">

    <!-- Favicons -->
     <!-- Load an icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="asset\img\icon\bootstrap-icons-1.8.1/fonts/bootstrap-icons.woff?v=<?= time();?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
      <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet">
   
    <title>Dasboard | Humanity Care - Informasi Mengenasi Mitigasi dan Berita Seputar Bencana Alam</title>
</head>
<body>
   
<!-- The sidebar -->
<div class="sidebar">
<a href="dasboard.php"><i class="fa fa-fw brand"></i>HumanityCare</a>
  <a href="Databerita.php"><i class="fa fa-fw fa-home"></i> Berita</a>
  <a href="Datauser.php"><i class="fa fa-fw fa-users"></i> User</a>
  <a href="DataDonatur.php"><i class="fa fa-fw fa-archive"></i>Donatur</a>
  <a href="logout.php" class="position-absolute bottom-0 start-0"><i class="fa fa-sign-out"></i>Sign out</a>
</div>

<div class="main pt-5">
<h2>Dasboard Humanity Care</h2>
<h3>Informasi Mengenasi Mitigasi dan Berita Seputar Bencana Alam </h3>
<!-- <h3>Selamat datang , <?= $_SESSION["signin"]; ?></h3> -->
</div>
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
<script type="text/javascript" src="../asset/js/bootstrap.js?v=<?= time();?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script type="text/javascript" src="../asset/js/custome.js?v=<?= time();?>"></script>
</body>

</html>