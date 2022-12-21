<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggunaan While di PHP</title>
</head>

<body>
    <h1>While di PHP
    </h1>
    <?php
    // echo("Selamat datang di PHP Wildan")
    $hari = array("Senin", "Selasa", "Ranu", "Kamis", "Jum'at", "Sabtu", "Ahad");
    $i = 0;
    while ($i<count($hari)) {
        # echo hari ke -
        echo("Hari ke ".($i+1)." adalah ".$hari[$i]."<br>");
        $i++;
    }
    ?>

</body>

</html>