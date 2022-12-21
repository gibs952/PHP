<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggunaan While untuk ngitung</title>
</head>

<body>
    <h1>While di PHP untuk ngitung
    </h1>
    <?php
    // deklarasi variabel
    $hitung =0; 
    $a = 0;
    while ($a <= 6) {
        if($a % 2 == 0) $hitung = $hitung + $a;
        $a++;
    }
    echo ("Akumulasi bilangan genap dari 0 s/d 6 adalah " . $hitung);

    ?>

</body>

</html>