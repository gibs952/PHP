<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi String ucfirst</title>
</head>
<body>
    <!-- ucfirst digunakan mengkapitalisasi huruf awal pada string -->
    <h1>Fungsi String ucfirst()
    </h1>
    <?php
    //deklarasi variabel dengan value string
    $string="pemrograman php menyenangkan";
    //Memasukan fungsi string ucfirst kedalam variabel string
    $kata=ucfirst($string);
    echo ("<l>\"$string\"</l> <br>");
    echo ("Hasil fungsi ucfirst-nya adalah $kata");
    ?>
</body>
</html>