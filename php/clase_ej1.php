<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    <table>
    <?php
        $contador = 0;
        for ($filas=3; $filas >= 0 ; $filas--) { 
           echo "<tr>";
           for ($columnas=4; $columnas >= 0 ; $columnas--) { 
                echo "<td>hola</td>";
            }
            echo "</tr>";
        }

        echo "Hay $contador impares entre 6 y 0";


        $filas=3;
        $columnas=4;
    ?>

    </table>
</body>
</html>