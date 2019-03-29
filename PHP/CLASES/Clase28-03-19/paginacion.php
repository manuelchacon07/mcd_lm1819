<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Paginacion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        if (isset($_REQUEST['posicion'])) {
            $inicio = $_REQUEST['posicion'];
        } else {
            $inicio = 0;
        }
        $conexion = mysqli_connect("localhost", "root", "", "cursophp")or die("Problemas en la conexion");
        //En mysql es obligatorio poner el 'as' para crear un alias a la tabla
        //limit, muestra en pantalla cierta cantidad de dato
        $registros = mysqli_query($conexion, 
        "SELECT idAlumno, nombre, mail, codigocurso, nombreCurso
        FROM alumnos
        INNER JOIN cursos ON codigocurso = idCurso 
        LIMIT $inicio,2") or die("Poblemas en el select".mysqli_error($conexion));

        $contador = 0;

        while ($reg=mysqli_fetch_array($registros)) {
            echo "Nombre: " . $reg['nombre'] . 
            " - Email: " . $reg['mail'] .
            " - Curso: " . $reg['nombreCurso'] . "<br>";
            $contador++;
        }

        if ($inicio == 0) {
            echo "Atras";
        } else {
            $anterior = $inicio-2;
            echo "<a href='paginacion.php?posicion=$anterior'>Atras</a> ---- ";
        }

        if ($contador != 2) {
            echo "Siguiente";
        } else {
            $next = $inicio + 2;
            echo "<a href='paginacion.php?posicion=$next'>Siguiente</a>";

        }

        mysqli_close($conexion);
    ?>
</body>
</html>