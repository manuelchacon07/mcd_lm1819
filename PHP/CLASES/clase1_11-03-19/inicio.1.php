<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>insertar alumno</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="insertar.1.php">
        <div>
            <label for="name">Nombre Alumno</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="mail">Email Alumno: </label>
            <input type="email" id="mail" name="mail">
        </div>
        <div>
            <label for="curso">Curso Alumno: </label>
            <select name="curso" id="curso">
                <?php
                    $conexion = mysqli_connect("localhost", "root", "", "cursophp") or die("Problemas de conexion");
                    $registros = mysqli_query($conexion, "SELECT idCurso, nombreCurso FROM cursos") or die("Problemas en el select" . mysqli_error($conexion));
                    $curso;

                    while ($reg = mysqli_fetch_array($registros)) {
                        echo "<option value='$reg[idCurso]'>$reg[nombreCurso]</option>";
                    }
                ?>
            </select>
        </div>
        <div>
            <input type="submit" name="enviar">
        </div>
    </form>
</body>
</html>