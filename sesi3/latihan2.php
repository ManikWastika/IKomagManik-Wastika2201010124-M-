<?php
    $age = array("ananda"=>"19", "manik"=>"19", "prayoga"=>"20", "puan"=>"50");
    
    echo "umur dari Puan ". $age["puan"]. " Tahun<br>";

    echo "<hr>";

    echo "<ol>";
    foreach($age as $nama => $umur){
        echo " <li> Umur Dari ". $nama. " adalah ". $umur. "</li>";
    }
    echo "</ol>";
?>