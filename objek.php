<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objek dan Class dalam PHP</title>
</head>
<body>
    <h1>Tipe data Objek pada PHP
    </h1>
    <?php
    //pembuatan class
    class Wildan{
        var $str="Variabel Class";
        function set_vars($str){
            $this->str=$str;
        }
    }
    $class=new Wildan;
    echo $class->str;
    $class->set_vars("Variabel Objek");
    echo ('<br>');
    echo $class->str;
    ?>
</body>
</html>