<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>insertar producto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        $id = trim(htmlspecialchars(strip_tags($_REQUEST["id"]), ENT_QUOTES, "UTF-8"));
        $desc = trim(htmlspecialchars(strip_tags($_REQUEST["description"]), ENT_QUOTES, "UTF-8"));
        $pre = trim(htmlspecialchars(strip_tags($_REQUEST["price"]), ENT_QUOTES, "UTF-8"));
        $cant = trim(htmlspecialchars(strip_tags($_REQUEST["stock"]), ENT_QUOTES, "UTF-8"));
        $pro = trim(htmlspecialchars(strip_tags($_REQUEST["pro"]), ENT_QUOTES, "UTF-8"));

        $conexion = mysqli_connect("localhost", "root", "", "bdejemplo") or die("Problemas de conexion");

        mysqli_query($conexion, "INSERT INTO productos(idProductos,descripcion,precio,cantidad,idProveedor) VALUES ('$id','$desc','$pre','$cant','$pro')") or die("Problemas en el insert" . mysqli_error($conexion));

        mysqli_close($conexion);

        print "<h2>Producto añadido satisfactoriamente</h2>";

        print "<a href=8.php>VOLVER</a>";

    ?>
</body>
</html>