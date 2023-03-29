<?php
    $nvar = "p1";
    $nvar = $_GET["pg"];
    if(isset($_GET["pg"])){
        $nvar = $_GET["pg"];
    }

    switch($nvar){
        case "p1";
            $judulpage = "halam 1";
            $konten = "<h3>Halaman 1</h3>";
            break;
        case "p2";
            $judulpage = "halam 2";
            $konten = "<h3>Halaman 2</h3>";
            break;
        case "p3";
            $judulpage = "halam 3";
            $konten = "<h3>Halaman 3</h3>";
            break;
        case "p4";
            $judulpage = "halam 4";
            $konten = "<h3>Halaman 4</h3>";
            break;
        default;
        $judulpage = "halaman 1";
        $konten = "<h3>halaman 1</h3>";
        break;

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$judulpage; ?></title>
</head>
<body>
    <a href="latihan3.php?pg=p1">Page1</a><a href="latihan3.php?pg=p2">Page2</a><a href="latihan3.php?pg=p3">Page3</a><a href="latihan3.php?pg=p4">Page4</a>
    <?php
        echo $konten;
    ?>
</body>
</html>