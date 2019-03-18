<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php

    //Realice el siguiente programa. Cree un formulario para calcular el área y el perímetro de un rectángulo.
    //En el formulario principal deben aparecer dos cajas de texto para indicar la base y la altura del rectángulo.
    //Además, añadir un radiobutton para indicar si lo que queremos calcular es el área o el perímetro.
    //Cuando se pulse en el botón “Calcular” debe mostrar el resultado en la siguiente pantalla.

    $base = $_REQUEST["base"];
    $altura = $_REQUEST["altura"];
    $area = $_REQUEST['area'];
    $perimetro = $_REQUEST['perimetro'];
    $total=0;
    
    
    //errores
    if ($base = "") {
        echo "Introduce una base";
        header("location: 1.php");
    } elseif ($altura = "") {
        echo "Introduce una altura";
        header("location: 1.php");
    } elseif ($base = "" && $altura = "") {
        echo "Introduce una base y una altura";
        header("location: 1.php");
    } elseif ($area = "" && $perimetro = "" ) {
        echo "selecciona la cuenta que quieres realizar";
        header("location: 1.php");
    } 
    else {
    //calculo
        if (isset($area)) {
            $total = $base*$altura;
            echo "$total";
        } else {
            $total = ($base*2)+($altura*2);
            echo "$total";
        }
    }

    ?>
</body>
</html>