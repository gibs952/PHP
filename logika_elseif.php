<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logika else if di PHP</title>
</head>

<body>
    <h1>Penggunaan IF
    </h1>
    <?php
    // memasukan variabel umur
    $nilai = 80;
    echo ("Umur anda $nilai tahun <br>");
    // Jika nilai lebih dari atau sama dengan 85
    if ($nilai>=85){
        echo ("Grade A");
    }
    // Jika nilai lebih dari atau sama dengan 75 tetapi kurang dari 85
    elseif(($nilai>=75) and ($nilai<85)){
        echo ("Grade B");
    }
    // Jika nilai lebih dari atau sama dengan 65 tetapi kurang dari 75
    elseif(($nilai>=65) and ($nilai<75)){
        echo ("Grade C");
    }
    // Jika nilai lebih dari atau sama dengan 50 tetapi kurang dari 65
    elseif(($nilai>=50) and ($nilai<65)){
        echo ("Grade D");
    }
    // Jika kurang dari 50
    else{
        echo ("Grade E");
    }
    ?>
</body>

</html>