<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir diskon</title>
</head>

<body>
    <h1>Sistem diskon PHP
    </h1>
    <?php
    // deklarasi variabel
    $bought =75000; 
    $disc = 0;
    if ($bought>=100000) {
        $disc = $bought * (25 / 100);
    }elseif($bought>=75000){
        $disc = $bought * (20 / 100);

    }elseif($bought>=50000){
        $disc = $bought * (15 / 100);
    }elseif($bought>=25000){
        $disc = $bought * (10 / 100);
    }elseif($bought>=10000){
        $disc = $bought * (5/ 100);
    }
    $bayar = $bought - $disc;
    echo ("<pre>");
    echo("Total Pembelian = Rp." .$bought."<br>");
    echo("Potongan        = Rp." .$disc."<br>");
    echo("Total Bayar     = Rp." .$bayar);
    echo ("</pre>");

    ?>

</body>

</html>