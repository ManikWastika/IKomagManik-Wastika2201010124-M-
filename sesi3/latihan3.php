<?php
$mahasiswa = array(
    array("nama" => "upin", "ID" => "00001", "dari" => "Durian Runtuh"),
    array("nama" => "ijat", "ID" => "00002", "dari" => "Durian Runtuh"),
    array("nama" => "meimei", "ID" => "00003", "dari" => "china"),
    array("nama" => "susanti", "ID" => "00004", "dari" => "indonesia"),
);

// echo $mahasiswa[0]["nama"];
// echo "<hr>";

// print_r($mahasiswa);

// echo "<hr>";

// foreach ($mahasiswa as $data) {
//     foreach ($data as $table => $nval) {
//         echo $table . " : " . $nval . "<br>";
//     }
//     echo "<hr>";
// }

header("content-type: application/json");
echo json_encode($mahasiswa);