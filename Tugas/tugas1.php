<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menentuan ganjil genap</title>
</head>

<body>
    <h1>Menentukan bilangan ganjil atau genap</h1>
    <?php
    // variabel
    $var1 = "10";

    // echo dari variabel
    echo ("\$variabel 1 = $var1<br>");
    //jika variavel adalah genap
    if ($var1 % 2 ==0) {
        // Jika bisa maka
    echo "$var1 Adalah Bilangan Genap";
    }else {
        // Jika tidak bisa
    echo ("$var1 Adalah Bilangan Ganjil");

    }



    ?>

</body>

</html>