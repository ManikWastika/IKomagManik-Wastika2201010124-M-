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
    function ceklogin($user, $pwd){
        global $cnn;
        $hsl["STATUS"] = false;
    
        $sql = "SELECT Nama, email, Username, Passkey, iduser FROM tbuser WHERE username='$user';";

        $hs = mysqli_query($cnn, $sql);
        $jdata = mysqli_num_rows($hs);

        if($jdata > 0){
            $h = mysqli_fetch_assoc($hs);
            if($h["passkey"] = $pwd){
                $hsl["STATUS"] = true;
                $hsl["NAMA"] = $h["nama"];
                $hsl["EMAIL"] = $h["email"];
                $hsl["IDUSER"] = $h["iduser"];
            }
        }
        return $hsl;
    }

?>