<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>tej7.1.php</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        $mail = trim(htmlspecialchars(strip_tags($_REQUEST["mail"]), ENT_QUOTES, "UTF-8"));
        $bd = mysqli_connect("localhost", "root", "", "cursophp") or die("problemas en la conexion");
        $query = mysqli_query($bd, "SELECT * FROM alumnos WHERE mail = '$mail'");
        if ($mail != "") {
            if ($query != "") {
                while ($reg=mysqli_fetch_array($query)) {
                    print "ID alumno: $reg[idAlumno] <br />";
                    print "Nombre alumno: $reg[nombre] <br />";
                    print "Mail alumno: $reg[mail] <br />";
                    print "ID curso: $reg[codigocurso]";
                }
            } else {
                setcookie("error","<p style=color:red;>No existe un alumno con ese email</p>",time()+1);
                header("location: tej7.php");
            }
        } else {
            echo "No existe";
        }
        mysqli_close($bd);
    ?>
</body>
</html>