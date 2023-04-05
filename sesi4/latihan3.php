<?php
    $usr = "";
    $ps = "";
    $mcd = "";
    if(isset($_REQUEST["exUSER"])){
        $usr = $_REQUEST["exUSER"];
        $ps = $_REQUEST["exPASKY"];
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form dengan Request Mandle</title>
</head>
<body>

<form method="POST" action="latihan3.php">

    <div>
        User Item
        <input type="text" name="exUSER">
    </div>

    <div>
        Password
        <input type="password" name="exPASKY">
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