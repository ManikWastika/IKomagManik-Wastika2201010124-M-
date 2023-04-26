<?php
    // include();
    // include_once();
    // require();
    // require_once();

    include("config.php");

    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT) or die("koneksi ke DBMS Mysql Gagal");
    // if($cnn){
    //     echo "Koneksi ke DBMS Mysql Sukses";
    // }else{
    //     echo "koneksi ke DBMS Mysql Gagal";
    // }
    // mysqli_close($cnn);
?>