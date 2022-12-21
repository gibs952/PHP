<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi String strlen</title>
</head>
<body>
    <!-- Strlen digunakan untuk menghitung jumlah karakter dalam suatu teks/string -->
    <h1>Fungsi String strlen()
    </h1>
    <?php
    //deklarasi variabel dengan value string
    $string="Pemrograman PHP menyenangkan";
    //Memasukan fungsi string strlen kedalam variabel string
    $jml=strlen($string);
    echo ("<l>\"$string\"</l> <br>");
    echo ("Banyak Karakter adalah $jml");
    ?>
</body>
</html>