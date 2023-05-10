<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 3</title>
</head>
<body>

    <form>
        <div>
            Alas
            <input type="number" id="txALAS" placeholder="masukan luas" name="txALAS">
        </div>

        <div>
            Tinggi
            <input type="number" id="txTINGGI" placeholder="masukan tinggi" name="txTINGGI">
        </div>

        <div>
            <button type="button" onclick="checknama()">Check Nama</button>
        </div>
    </form>

    <div id="hasil">klik dini untuk hasil</div>

    <script>
        function checknama(){
            let alas = document.getElementById("txALAS").value;
            let tinggi = document.getElementById("txTINGGI").value;
            let luas = alas*tinggi/2
            alert("isi dari field txNAMA :"+luas);

            document.getElementById("hasil").innerHTML= "luas dari segi tiga adalah "+luas;
            document.getElementById("hasil").style.color="blue";

            
        }
    </script>

</body>
</html>