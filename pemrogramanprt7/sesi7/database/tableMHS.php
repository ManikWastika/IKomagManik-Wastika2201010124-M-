
<?php
    include("koneksi.php");

    $test = "CREATE TABLE tbuser(
        id INT AUTO_INCREMENT PRIMARY KEY,
        Nama varchar(255),
        email varchar(255) not null,
        Username varchar(255) not null,
        Passkey varchar(255) not null,
        iduser varchar(255) not null
    );";

    $hsl = mysqli_query($cnn , $test);
    if($hsl){
        echo "table tbMHS ==> SUKSES";
    }
?>