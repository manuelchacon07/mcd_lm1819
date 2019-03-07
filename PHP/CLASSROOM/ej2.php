<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
Dados tres números indicar si alguno es suma de los otros dos y mostrarlo por pantalla
    <?php

        $n1= rand();
        $n2= rand();
        $n3= rand();

        $suma= $n1 + $n2;
        if ($suma == $n1) {
            echo "$n2 + $n3 es suma de $n1";
        } else {
            echo "$n2 + $n3 no es suma de $n1";
        }
    ?>
</body>
</html>