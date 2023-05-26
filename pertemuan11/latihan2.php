<?php
    $data[0]["NIM"] = "2201010124";
    $data[0]["NAMA"] = "manik wastika";
    $data[0]["JkEL"] = "L";
    $data[0]["jRSN"] = "TI-MTI";
    $data[0]["kLS"] = "M";
    $data[0]["tGLHRN"] = "2004-03-20";

    $data[1]["NIM"] = "2201010224";
    $data[1]["NAMA"] = "wayan darma";
    $data[1]["JkEL"] = "L";
    $data[1]["jRSN"] = "TI-MTI";
    $data[1]["kLS"] = "D";
    $data[1]["tGLHRN"] = "2003-01-11";
    
    $data[2]["NIM"] = "2201010123";
    $data[2]["NAMA"] = "Ketut Belok";
    $data[2]["JkEL"] = "P";
    $data[2]["jRSN"] = "TI-MTI";
    $data[2]["kLS"] = "Z";
    $data[2]["tGLHRN"] = "2004-03-15";

    $data[3]["NIM"] = "2201010321";
    $data[3]["NAMA"] = "sukma dani";
    $data[3]["JkEL"] = "P";
    $data[3]["jRSN"] = "TI-MTI";
    $data[3]["kLS"] = "A";
    $data[3]["tGLHRN"] = "2003-03-21";

    $data[4]["NIM"] = "2201010098";
    $data[4]["NAMA"] = "putu adinata";
    $data[4]["JkEL"] = "L";
    $data[4]["jRSN"] = "TI-MTI";
    $data[4]["kLS"] = "P";
    $data[4]["tGLHRN"] = "2004-02-20";

    header("content-type: application/json; charset: utf-8");
    echo json_encode($data);
?>