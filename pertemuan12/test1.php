<?php
    $data["NIM"] = "2201010124";
    $data["NAMA"] = "manik wastika";
    $data["JkEL"] = "L";
    $data["jRSN"] = "TI-MTI";
    $data["kLS"] = "M";
    $data["tGLHRN"] = "2004-03-20";

    header("content-type: application/json; charset: utf-8");
    echo json_encode($data);
?>