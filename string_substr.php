<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi String substr</title>
</head>
<body>
    <!-- Untuk mengambil sebagian string berdasarkan nomor posisi dalam string -->
    <h1>Fungsi String substr()
    </h1>
    <?php
    //deklarasi variabel dengan value string
    $string="Pemrograman PHP menyenangkan";
    //Memasukan fungsi string substr kedalam variabel string
    $kata=substr($string,16,3);
    echo ("<l>\"$string\"</l> <br>");
    echo ("Hasil substr (16, 3) adalah $kata");
    ?>
</body>
</html>