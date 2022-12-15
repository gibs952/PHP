<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logika IF di PHP</title>
</head>

<body>
    <h1>Penggunaan IF
    </h1>
    <?php
    // memasukan variabel umur
    $umur = 18;
    echo ("Umur anda $umur tahun <br>");
    // If umur lebih dari atau sama dengan 17
    if ($umur>=17){
        echo ("Anda Sudah Tua");
    }
    // Else umur anda kurang dari 17
    else {
        echo ("Anda Masih Muda");
    }
    ?>
</body>

</html>