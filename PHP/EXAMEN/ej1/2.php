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
    // No es necesario enviar la opción del radiobutton. Lo puedes validar en el mismo IF

    /* No hace falta poner validadores para errores, pues en el formulario, puedes poner
    obligatorio los campos de base, altura y los checkbox
    */

    if ($_REQUEST['option'] == 0){
        $area = ($base * $altura);
        print "El área del rectángulo es $area";
    } else {
        $perimetro = (($base * 2) + ($altura * 2));
        print "El perímetro del rectángulo es $perimetro";
    }

    ?>
</body>
</html>