<?php
session_start();
if (!isset($_SESSION["signin"])) {
   header("Location: ../login.php");
   exit;
}
require 'functions.php';
 
$id = $_GET["id"];

if(deleteDonatur($id)>0){
    echo"
    <script>
                alert('Data donatur sudah di sumbangkan');
                document.location.href = '../dasboard/Datadonatur.php';
            </script>
    ";
}else{
    echo"
    <script>
                alert('data gagal dihapus');
                document.location.href = '../dasboard/Datadonatur.php';
            </script>
    ";
}
?>