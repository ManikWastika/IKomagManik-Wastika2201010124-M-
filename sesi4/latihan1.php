<?php
    $usr = "";
    $ps = "";
    $eusr = "";
    $eps = "";
    if(isset($_GET["exUSER"])){
        $usr = $_GET["exUSER"];
        $ps = $_GET["exPASKY"];
        if($usr==""){
            $eusr = "<div style='color:red; font-size:10px;'>field user masih kosong</div>";
        }
        if($ps==""){
            $eps = "<div style='color:red; font-size:10px;'>field Password masih kosong</div>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Method GET</title>
</head>
<body>

<form method="GET" action="latihan1.php">
    

    <div>
        User Item
        <input type="text" name="exUSER">
        <?=$eusr;?>
    </div>

    <div>
        Password
        <input type="password" name="exPASKY">
        <?=$eps;?>
    </div>

    <div>
        <button> Login </button>
    </div>
</form>

<div>
    isi dari form:<br>
        1. User Name: <?=$usr?><br>
        2. Password: <?=$ps?>
</div>
    
</body>
</html>