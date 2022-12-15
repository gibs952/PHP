<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabel dan Tipe data</title>
</head>

<body>
    <h1>Contoh Variabel dan Tipe Data</h1>
    <?php
    // variabel
    $var1 = "Halo";
    $var2 = 1;
    $var3 = 3.14;
    // echo dari variabel
    echo ("\$var1 = $var1<br>");
    echo ("\$var2 = $var2<br>");
    echo ("\$var3 = $var3<br>");
    echo("Tipe data \$var1 adalah  ".gettype($var1)."<br>");
    echo("Tipe data \$var2 adalah  ".gettype($var2)."<br>");
    echo("Tipe data \$var3 adalah  ".gettype($var3)."<br>");

    ?>

</body>

</html>