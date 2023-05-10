<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <style>
        #pesan {
            border: solid black;
            padding: 5px;
            background-color: red;
            text-align: center;
        }
    </style> -->
</head>
<body>

    <div id="pesan">pesan singkat</div>

    <script src="java1.js"></script>
    <script>
        document.write("muncul text pada halaman website, write");
        document.getElementById("pesan").innerHTML= "mengganti tulisan pesan singkat"; //innerHTML= "mengganti tulisan pesan singkat";
        document.getElementById("pesan").style.color="red";
        //document.getElementById("pesan").style.outline="1px solid black";
    </script>
    
</body>
</html>