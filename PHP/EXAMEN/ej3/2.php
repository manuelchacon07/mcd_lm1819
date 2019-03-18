<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <!--
        Realice el siguiente ejercicio de BD. Muestre un formulario para rellenar una caja de texto con el nombre de un país.
        Al pulsar el botón “Buscar” realice una consulta a la base de datos “bdpersonas” 
        en la tabla “personas” para mostrar todas las personas de ese país. 
        Si no existe el país en la base de datos, mostrar un mensaje indicandolo.
    -->   
    <?php
        $pais = trim(htmlspecialchars($_REQUEST["pais"], ENT_QUOTES, "utf-8"));
        $bd = mysqli_connect("localhost", "root", "", "bdpersonas");
        $query = mysqli_query($bd, "SELECT nombre FROM personas WHERE pais LIKE '$pais'");
        
        if ($query = " ") {
            echo "No existe nadie en ese pais";
        } else {
            echo "hola";
            }

    ?>
</body>
</html>