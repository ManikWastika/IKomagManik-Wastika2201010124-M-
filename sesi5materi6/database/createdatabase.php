<?php
    include("../configurasi.php");

    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS);
    if($cnn){
        $sql = "CREATE DATABASE " . DBNAME;
        $hsl = mysqli_query($cnn, $sql );
        if($hsl){
            echo "Database" . DBNAME . " Berhasil Dibuat";
        }else {
            echo "Database" . DBNAME . " Gagal Dibuat";
        }
    }else{
        echo "koneksi ke DBMS Mysql Gagal";
    }
    mysqli_close($cnn);
?>