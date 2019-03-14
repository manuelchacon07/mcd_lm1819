<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>insertar alumno</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        $name = trim(htmlspecialchars(strip_tags($_REQUEST["name"]), ENT_QUOTES, "UTF-8"));
        $mail = trim(htmlspecialchars(strip_tags($_REQUEST["mail"]), ENT_QUOTES, "UTF-8"));
        $curso = trim(htmlspecialchars(strip_tags($_REQUEST["curso"]), ENT_QUOTES, "UTF-8"));

        $conexion = mysqli_connect("localhost", "root", "", "cursophp") or die("Problemas de conexion");

        mysqli_query($conexion, "INSERT INTO alumnos(nombre, mail, codigocurso) VALUES ('$name','$mail','$curso')") or die("Problemas en el insert" . mysqli_error($conexion));

        mysqli_close($conexion);

        print "<h2>Alumno dado de alta satisfactoriamente</h2>";

    ?>
</body>
</html>