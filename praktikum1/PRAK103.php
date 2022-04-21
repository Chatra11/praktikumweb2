<!DOCTYPE html>
<html>
<head>
    <title>Soal No 3</title>
</head>
<body>
    <?php
    $Celcius    = 37.841;
    $Fahrenheit = ($Celcius * 9/5) + 32;
    $Reamur     =  4/5 * $Celcius;
    $Kelvin     = $Celcius + 273.15;

    printf("Fahrenheit (F) = %.4f<br/>",$Fahrenheit);
    printf("Reamur (R) = %.4f<br/>",$Reamur);
    printf("Kelvin (K) = %.4f<br/>",$Kelvin);
    ?> 
</body>
</html>
