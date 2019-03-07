<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Variables</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        echo "Hola";
        echo "<b>Hola</b> a todos";
        print "<p>Hola</p>\n";

        $Saludo="Holaaa";
        echo "<b>$Saludo</b>";
        echo "<br/>Mensaje: <b>" . $Saludo . "</b>. Fin Mensaje<br/>";
    ?>

    <?=$Saludo ?>

    <?php

    $a = 8;
    $b = 2;
    $c = 2;

    echo $a + $b, "</br>";

    $resultado = $a - $b;
    echo "$resultado</br>";
    $a++;
    $a = $a + 1;
    $a--;
    $a = $a - 1;

    echo $a == $b, "</br>";

    echo ($a == $b) || ($c == $b), "</br>";

    /* "!" Indica lo conrario al signo */

    echo !($b <= $c), "</br>";

    $perimetro = 2 * 3.14 * 15;
    print $perimetro;
    print 2 * $perimetro;

    $tabla = ["Valor1", "Valor2"];

    echo $tabla[1];

    $tabla2 = [["msg1", "msg2"], ["msg3", "msg4"]];
    
    echo $tabla2[0][1];

    $correcto = true;

    if ($correcto) {
        print "<p>Es correcto</p>";
    }

    $texto = "Este texto";

    /* Añade texto en la posicion 0 de la variable */

    $texto[0] = "e";

    echo $texto;

    /* Añade texto en la posicion 15 de la variable (Crea espacios hasta llegar a dicha posicion) */

    $texto[15] = "F";

    echo $texto;

    $tabla3 = ["Hola", 2019];

    print $tabla3[0] . "-" . $tabla3[1];


    /* Añadir valor a la tabla*/
    $tabla3[]="fin";
    print $tabla3[2];

    /*Borrar un valor*/

    /*unset($tabla3[1]);*/
    print $tabla3[1];
    
    /*Elimina toda la tabla */
    /*
    unset($tabla3);

    print $tabla3[0];

    */

    echo count($tabla3);

    $numeros = [15, 10, 5, 15, 11, 15];

    echo max($numeros);

    echo min($numeros);

    //sort($numeros);

    print_r($numeros);

    if (in_array(15, $numeros)) {
        print "Esta el 15";
    }
    else {
        print "No esta";
    }

    echo array_search(15, $numeros);

    $encontrados = array_keys($numeros, 15);

    print_r($encontrados);

    print "</br>";

    shuffle($numeros);

    print_r($numeros);

    echo array_rand($numeros);

    echo $numeros[array_rand($numeros)];


    define("PI" , 3.14);

    print "<p>El valor de PI es " . PI . "</p>";

    print "<pre>";
    print_r(get_defined_constants());
    print "</pre>";

    $maximo = PHP_INT_MAX;
    echo $maximo;


    ?>

</body>
</html>