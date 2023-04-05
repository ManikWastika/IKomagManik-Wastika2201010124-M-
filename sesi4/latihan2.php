<?php
    $usr = "";
    $ps = "";
    $mcd = "";
    if(isset($_POST["exUSER"])){
        $usr = $_POST["exUSER"];
        $ps = $_POST["exPASKY"];
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Method POST</title>
</head>
<body>

<form method="POST" action="latihan2.php">

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