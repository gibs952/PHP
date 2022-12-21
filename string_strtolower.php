<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi String strtolower</title>
</head>
<body>
    <!-- strtolower adalah fungsi untuk mengubah string menjadi tidak kapital semua -->
    <h1>Fungsi String strtolower()
    </h1>
    <?php
    //deklarasi variabel dengan value string
    $string="PEMROGRAMAN PHP MENYENANGKAN";
    //Memasukan fungsi string strtolower kedalam variabel string
    $kata=strtolower($string);
    echo ("<l>\"$string\"</l> <br>");
    echo ("Hasil strtolower-nya adalah $kata");
    ?>
</body>
</html>