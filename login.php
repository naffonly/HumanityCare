<?php
session_start();


require 'path/functions.php';

if (isset($_SESSION["signin"])) {
    header("Location: dasboard/dasboard.php");
    exit;
}

if (isset($_POST["signin"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn,"SELECT * FROM tb_users WHERE username_user = '$username'");

    if (mysqli_num_rows($result) === 1) {
        $_SESSION["signin"]=true;
        //cek password
        $row = mysqli_fetch_assoc($result);
        // header("Location: index.php");
        if (password_verify($password,$row["password_user"])) {
            header("Location: dasboard/dasboard.php");
            exit;
        }
    }
    $error =true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="asset/css/bootstrap.css?v=<?= time();?>">
    <link rel="stylesheet" href="asset/css/custome-login.css?v=<?= time();?>">
    <link rel="stylesheet" href="asset/css/carousel.css?v=<?= time();?>">

    <!-- Favicons -->
    <link rel="stylesheet" href="asset\img\icon\bootstrap-icons-1.8.1/fonts/bootstrap-icons.woff?v=<?= time();?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
      <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet">
   
    <title>Login Admin</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-7 item-text"></div>
            <div class="col-5 login-form">
                <div style="padding-top: 35%;"></div>
                <div class="item m-auto">
                <h2>Selamat Datang</h2>
                <p>Harap Masukan Username dan Password agar dapat melanjutkan Proses</p>
                 <?php if (isset($error)) :?>
        <p style="color: red; font-style:italic ;">Usernama atau password tidak sesuai</p>
             <?php endif;?>
                <form action="" method="post">
                    <div class="mb-3">
                        <input type="text" name="username" class="form-control" placeholder="Username">
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control"  placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-secondary" name="signin">Sign In</button>
                    </form>
                </div>
            </div>
          </div>
    </div>
    <script type="text/javascript" src="asset/js/bootstrap.js?v=<?= time();?>"></script>
</body>

</html>