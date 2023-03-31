<?php
    $cars = array('Honda', 'Yamaha', 'Zusuki',);

    $jmlhdata = count($cars);
    echo "jumlah data = ". $jmlhdata . "<br>";
    for($i=0;$i<$jmlhdata;$i++){
        echo "<br>kendaraan " . $cars[$i];
    }

    echo "<hr>";

    echo "<ol>";
    foreach($cars as $d){
        echo " <li>Kendaraan ". $d. "</li>";
    }
    echo "</ol>";
?>