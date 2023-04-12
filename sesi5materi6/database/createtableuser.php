<?php
    include("koneksi.php");

    $tbel = "CREATE TABLE tbUSER(
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama varchar(30) not null,
        email varchar(255) not null,
        username varchar(10) not null,
        `password` varchar(255) not null,
        iduser varchar(255) not null
    );";

    $hsl = mysqli_query($cnn , $tbel);
    if($hsl){
        echo "Table tbUSER ==> sukses";
    }
?>