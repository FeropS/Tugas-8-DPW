<?php

$server = "localhost";
$username = "root";
$password = "";
$database_name = "dbunrikita";

$koneksi = mysqli_connect($server,$username,$password,$database_name);
if ($koneksi){
    $buka = mysqli_select_db($koneksi,$database_name);
    // echo "berhasil";
    if(!$buka){
        // echo "tidak terhubung";
    }
}else{
    // echo "tidak terhubung";
}
?>