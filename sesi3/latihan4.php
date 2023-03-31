<?php
    function tentangaplikasi(){
        echo "<h3>aplukasi apa saja</h3>";
        echo "<sup>versi 1.0</sup>";
    }

    function cetaktable1($tx){
        echo "isi table: ". $tx;
    }
    function cetaktable2($tx = "isikan table"){
        echo "isi table : ". $tx;
    }
    function jumlahkan($angka1=0, $angka2=0){
        return $angka1+$angka2;
    }

?>