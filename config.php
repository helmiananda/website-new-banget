<?php
 $server = "localhost";
 $user = "root";
 $pass = "";
 $database = "penyuratanrt07_login";

 $conn = mysqli_connect($server,$user,$pass,$database);

 if (!$conn) {
    die ("<script> alert ('Gagal terhubung dengan database') </script>");
 }
?>