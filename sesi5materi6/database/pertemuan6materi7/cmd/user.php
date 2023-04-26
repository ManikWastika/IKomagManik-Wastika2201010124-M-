<?php
    include("database/koneksi.php");

    function createuser($nama, $email, $user, $pass){

        $stt = false;
        $iduser = md5($user);
        $sql = "INSERT INTO tbuser(Nama, email, Username, Passkey, iduser)
        VALUES(
            '$nama',
            '$email',
            '$user',
            '$pass',
            '$iduser'
        );";
        $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT) or die("koneksi ke DBMS Mysql Gagal");
        $stt = mysqli_query($cnn, $sql);
        return $stt;
    }
?>