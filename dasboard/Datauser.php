<?php
session_start();
if (!isset($_SESSION["signin"])) {
   header("Location: ../login.php");
   exit;
}
require '../path/functions.php';

$user = query("SELECT * FROM tb_users");

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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.0/r-2.3.0/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.0/r-2.3.0/datatables.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
   <script type="text/javascript">
       $(document).ready(function() {
    var table = $('#tab').DataTable( {
        scrollY:        "400px",
        scrollX:        true,
        scrollCollapse: false,
        paging:         false,
        fixedColumns:   {
            leftColumns: 1,
        }
    } );
});
    </script>
    <title>Data User | HumanityCare</title>
</head>
<body> 
<div class="sidebar">
<a href="dasboard.php"><i class="fa  fa-fw brand"></i>HumanityCare</a>
  <a href="Databerita.php"><i class="fa fa-fw fa-home"></i> Berita</a>
  <a href="Datauser.php"><i class="fa fa-fw fa-users"></i> User</a>
  <a href="Datadonatur.php"><i class="fa fa-fw fa-archive"></i>Donatur</a>
  <a href="logout.php" class="position-absolute bottom-0 start-0"><i class="fa fa-sign-out"></i>Sign out</a>
</div>
<div class="main">
    <div class="containter-fluid   pt-3"></div>

<table id="tab" class="table table-striped stripe row-border order-column  " cellspacing="3" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Aksi</th>
                <th>Username</th>
                <th>Role</th>
                <th>Nama</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
        <?php $num = 1?>
    <?php foreach ($user as $row ): ?>
            <tr>
                <td><?= $num;?></td>
                <td>
                    <a href="edituser.php?id=<?= $row["id"];?>">Edit</a>
                    <a href="../path/hapusdata.php?id=<?= $row["id"];?>" onclick="return confirm('Yakin?');">Hapus</a>
                </td>
                <td><?= $row["username_user"];?></td>
                <td><?= $row["id_role"];?></td>
                <td><?= $row["nama_user"];?></td>
                <td><?= $row["email_user"];?></td>
            </tr>
            <?php $num++ ?>
    <?php endforeach; ?>
        </tbody>
</table>
<a class="btn btn-primarys" href="user.php" role="button">Tambah User</a>
</div>
<!-- JS -->
<script src="../asset/js/custome.js"?v=<?= time();?>></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>   
 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>   
 <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>   
 <script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>   

<script type="text/javascript" src="../asset/js/bootstrap.js?v=<?= time();?>"></script>
</body>

</html>