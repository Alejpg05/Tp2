<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <h1>Ejercicio 9</h1>
<?php
    $numero1=10;
    $numero2=2;
    if ($numero1 > $numero2){
        echo "La suma es " . $numero1 + $numero2 . " y la resta es " . $numero1 - $numero2;
    }
   elseif($numero1<$numero2){
    echo "La multiplicacion es " . $numero1 * $numero2 . " la division es " . $numero2 / $numero1 . " y el resto es " . $numero2 % $numero1;
   }
   else{
    echo "Los numeros son iguales";
   }

    ?>
</body>
</html>