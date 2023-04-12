<?php
    include("koneksi.php");

    $test = "CREATE TABLE tbMHS(
        id INT AUTO_INCREMENT PRIMARY KEY,
        id_mahasiswa int(11),
        nama varchar(255) not null,
        nim int(11) not null,
        prodi varchar(50) not null,
        jenis_Kelamin varchar(1) not null,
        Tanggal_Lahir date not null
    );";

    $hsl = mysqli_query($cnn , $test);
    if($hsl){
        echo "table tbMHS ==> SUKSES";
    }
?>