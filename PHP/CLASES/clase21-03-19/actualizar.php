<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        $id=trim(htmlspecialchars($_REQUEST["identificador"], ENT_QUOTES, "utf-8"));
        $name=trim(htmlspecialchars($_REQUEST["nombre"], ENT_QUOTES, "utf-8"));
        $curse=trim(htmlspecialchars($_REQUEST["curso"], ENT_QUOTES, "utf-8"));


        $conexion = mysqli_connect("localhost","root","","cursophp") or die("problemas en la conexion");

        //$registros = mysqli_query(<conexion de la bd>, "UPDATE <tabla> SET <columnas> = '<contenido cambiado>' WHERE <clave de referencia> = '<contenido clave>'");
        $registros = mysqli_query($conexion, "UPDATE alumnos SET nombre='$name', codigocurso='$curse' WHERE idAlumno=$id") or die("problemas de actualizacion " .mysqli_error($conexion));
        print "<p>Alumno Actualizado</p>";


    ?>
</body>
</html>