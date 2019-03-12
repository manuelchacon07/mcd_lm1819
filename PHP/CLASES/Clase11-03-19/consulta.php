<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Consulta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
                    //mysqli_connect("ip_server","user","password", "tablespace" )
        $connection = mysqli_connect("localhost", "root", "", "cursophp" ) or die("problemas de conexion");

        $registers = mysqli_query($connection, "SELECT idAlumno, nombre, mail, codigocurso FROM alumnos") or die("problemas en la consulta:".mysqli_error($connection));

        while ($reg=mysqli_fetch_array($registers)) {
            echo "IdAlumno: " . $reg['idAlumno'] . "<br>";
            echo "Nombre: " . $reg['nombre'] . "<br>";
            echo "Email: " . $reg['mail'] . "<br>";
            echo "IdCurso: " . $reg['codigocurso'] . "<br>";

        }
        mysqli_close($connection);
    ?>
</body>
</html>