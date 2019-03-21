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
        
        $mail=trim(htmlspecialchars($_REQUEST["mail"], ENT_QUOTES, "utf-8"));
        
        $conexion= mysqli_connect("localhost", "root", "", "cursophp") or die("Problemas en la conexion");

        $registro = mysqli_query($conexion , "SELECT * FROM alumnos WHERE mail = '$mail' ") or die("Problemas en la consulta: ".mysqli_error($conexion));

        if ($reg = mysqli_fetch_array($registro)) {
            ?>
            
            <form action="actualizar.php" method="post">
            
                <input type="hidden" name="identificador" id="identificador" value="<?php print $reg['idAlumno'];?>">

                <p>
                    <label for="nombre">Nombre </label>
                    <input type="text" name="nombre" id="nombre" value="<?php print $reg['nombre'];?>">
                </p>
                <p>
                    <label for="mail">Email </label>
                    <input type="email" name="mail" id="mail" value="<?php print $reg['mail'];?>" readonly>
                </p>
                <p>
                    <label for="curso">Curso </label>
                    <select name="curso" id="curso">
                    
                        <?php
                            $regcursos = mysqli_query($conexion, "SELECT * FROM cursos") or die("Problemas en la consulta: ".mysqli_error($conexion));

                            while ($regc = mysqli_fetch_array($regcursos)) {
                                if ($regc['idCurso'] == $reg['codigocurso']) {
                                    print "<option value='$regc[idCurso]' selected>$regc[nombreCurso]</option>";
                                } else {
                                    print "<option value='$regc[idCurso]'>$regc[nombreCurso]</option>";
                                }
                            }
                        ?>

                    </select>
                </p>
                <p>
                    <input type="submit" value="actualizar">
                </p>
                            
            </form>

            <?php
        } else {
            print "<p>Email no encontrado en la base de datos</p>";
            
        }



    ?>
</body>
</html>