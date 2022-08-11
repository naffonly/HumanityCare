<?php
session_start();
if (!isset($_SESSION["signin"])) {
   header("Location: ../login.php");
   exit;
}
require 'functions.php';
 
$id = $_GET["id"];

if(deleteBerita($id)>0){
    echo"
    <script>
                alert('data berhasil dihapus');
                document.location.href = '../dasboard/Databerita.php';
            </script>
    ";
}else{
    echo"
    <script>
                alert('data gagal dihapus');
                document.location.href = '../dasboard/Databerita.php';
            </script>
    ";
}
?>