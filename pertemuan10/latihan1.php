<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 1</title>
</head>
<body>
    
    <form action="" name="latihan1" method="POST" onsubmit="return checkform(this)">
        <div>
            NIM
            <input type="text" name="textnim" id="NIM">
        </div>

        <div>
            Nama
            <input type="text" name="textnama" id="NAMA">
        </div>

        <div>
            Jenis Kelamin
            <input type="radio" name="textjekelam" id="jekelam" value="Laki Laki">Laki Laki
            <input type="radio" name="textjekelam" id="jekelam" value="Perempuan">Perempuan
        </div>

        <div>
            <select name="jurusan" id="juruskam">
                <option value="Tata BoBa">Tata BoBa</option>
                <option value="Tata Busana">Tata Busana</option>
                <option value="Tata Mesin">Tata mesin</option>
                <option value="Tata electro">Tata Electro</option>
                <option value="Tata Multimedia">Tata Multimedia</option>
            </select>
        </div>

        <div>
            Hobi
            <input type="checkbox" name="hobi_Mancing">Mancink
            <input type="checkbox" name="hobi_nyanyi">Nyanyi
            <input type="checkbox" name="hobi_tidur">Tidur
            <input type="checkbox" name="hobi_Manggang">Manggank
        </div>

        <div>
            <button type="submit">kirim data</button>
        </div>
    </form>

    <script>
        function checkform(test){
            let fa1 = test.elements;
            let fanim = fa1.namedItem("textnim").value;
            let fanama = fa1.namedItem("textnama").value;
            let fajeniskel = fa1.namedItem("textjekelam").value;
            let jurus = fa1.namedItem("jurusan").value;
            let hoby_1 = [
                fa1.namedItem("hobi_Mancing").checked,
                fa1.namedItem("hobi_nyanyi").checked,
                fa1.namedItem("hobi_tidur").checked,
                fa1.namedItem("hobi_Manggang").checked
            ]
            
            console.log("NIM : "+fanim);
            console.log("Nama : "+fanama);
            console.log("Jenis Kelamin : "+fajeniskel);
            console.log("Jurusan : "+jurus);
            let h1 = hoby_1[0] ?  "Mancink" : "";
            let h2 = hoby_1[1] ?  "nyanyi" : "";
            let h3 = hoby_1[2] ?  "Tidur" : "";
            let h4 = hoby_1[3] ?  "Manggang" : "";
            console.log("Hobby :"+h1+h2+h3+h4);

            return false;

        }


    </script>

</body>
</html>