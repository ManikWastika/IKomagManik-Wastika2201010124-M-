<?php
    include("cmd/user.php");
    $psn = "";
    //cek pengiriman form
    if(isset($_POST["txPW"])){
        if($_POST["txPW"] == $_POST["txPW2"]){
            $nama = $_POST["txNAMA"];
            $email = $_POST["txMAIL"];
            $user = $_POST["txUSER"];
            $pass = $_POST["txPW"];

            if(createuser($nama, $email, $user, $pass)){
                $psn = "Create Data User Sukses";
            }else{
                $psn = "Create Data User Gagal";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi User</title>
</head>
<body>
    
    <form method="POST" action="register.php">

        <?php
            echo "<div>$psn</div>";
        ?>

        <div class="">
            Nama lengkap
            <input type="text" name="txNAMA">
        </div>

        <div class="">
            Email
            <input type="text" name="txMAIL">
        </div>

        <div class="">
            User
            <input type="text" name="txUSER">
        </div>

        <div class="">
            Password
            <input type="password" name="txPW">
        </div>

        <div class="">
            Verifikasi Password
            <input type="password" name="txPW2">
        </div>

        <div class="">
            <button type="submit">Register</button>
        </div>

    </form>

</body>
</html>