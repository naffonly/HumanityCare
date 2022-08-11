<?php
session_start();
if (!isset($_SESSION["signin"])) {
   header("Location: ../login.php");
   exit;
}
require '../path/functions.php';

if (isset($_POST["addUser"])) {

    if (TambahDataUser($_POST)> 0) {
        echo " <script>
            alert('user berhasil ditambahkan');
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
   
    <title>Tambah User | Humanity Care - Informasi Mengenasi Mitigasi dan Berita Seputar Bencana Alam</title>
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
    <h1>Tambah Data Pegawai</h1>
    <form action="" method="post" >
<div class="mb-3">
  <label for="username" class="form-label">Username</label>
  <input type="username" class="form-control" name="username" id="username" placeholder="Username" require>
</div>
<div class="mb-3">
  <label for="password" class="form-label">Password</label>
  <input type="password" class="form-control" name="password" id="password" placeholder="*******" require> 
</div>
<div class="mb-3">
  <label for="password2" class="form-label">konfirmasi Password</label>
  <input type="password" name="password2" class="form-control" id="password2" placeholder="*******" require>
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Role</label>
    <br>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="id" id="inlineRadio1" value="1">
        <label class="form-check-label" for="inlineRadio1">Admin</label>    
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="id" id="inlineRadio2" value="2">
        <label class="form-check-label" for="inlineRadio2">petugas</label>
    </div>
</div>

<div class="mb-3">
  <label for="email" class="form-label">Alamat Email</label>
  <input type="text" class="form-control" name="email" id="email" placeholder="email@example.com" require>
</div>
<div class="mb-3">
  <label for="name" class="form-label">Nama Lengkap</label>
  <input type="text" class="form-control" name="name" id="name" placeholder="Nama Lengkap" require>
</div>

<a href="Datauser.php" class="btn btn-primarys " >Batal</a>
<button type="submit" class="btn btn-primarys " name="addUser">Tambah Data</button>
</form>
</div>
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    

<script type="text/javascript" src="../asset/js/bootstrap.js?v=<?= time();?>"></script>
</body>

</html>