<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
    <?php

        //Desarrolle un ejercicio que muestre las tablas de multiplicar

        $j=0;
        $result;

        while ($j <= 10) {
            echo "<div style='float: left; margin: 2%; background: rgb(29, 176, 217)'>";
            for ($i=0; $i <= 10 ; $i++) { 
                $result=$i*$j;
                echo $j . "x" . $i . "=" . $result . "<br />";

            }
            echo "</div>";
            $j++;
        }
        echo "<br />";
        echo "<br />";

        //Mostramos los números de los días del 1 a la fecha actual. Ejemplo: si hoy es 11 debe mostrar los números del 1 al 11.

        $day = date(j);
        print $day;
        
        while ( 1 > $day) {
            echo "$day";
            echo "<br />";
            $day--;
        }

        //Dado un vector de números positivos desordenado, recórralo y muestre los 3 números mayores.


        $vector = [20, 50, 23, 13, 9, 6, 4, 6, 1];

        $vector1 = sort($vector);
        rsort($vector);
        print($vector[0]);
        print($vector[1]);
        print($vector[2]);
    ?>

</body>
</html>