<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
        //Muestra una consulta de todos los productos de la tabla productos mostrando el nombre completo del proveedor del producto...
        //Además, muestre un mensaje indicando el precio total de todos los productos y la cantidad de productos que tenemos en stock.
        //Añade un botón para insertar un producto en la base de datos.
        //Muestra en el formulario todos los proveedores que existen en la tabla de proveedores.
    <?php


        $conexion = mysqli_connect("localhost", "root", "", "bdejemplo") or die("Problemas de conexion");
        $productos = mysqli_query($conexion,"SELECT idProductos,descripcion,precio,cantidad FROM productos WHERE idProveedor in (SELECT idProveedor FROM proveedores)");
        $proveedores = mysqli_query($conexion,"SELECT Nombre FROM proveedores WHERE idProveedor = (SELECT idProveedor FROM productos)");
    
        print "<div style='background:red'>";
            while ($reg = mysqli_fetch_array($productos)) {
                echo "<p> ID del producto: " . "$reg[idProductos]</p>";
                echo "<p> Descripcion: " . "$reg[descripcion]</p>";
                echo "<p>Precio del producto: " . "$reg[precio]</p>";
                echo "<p>Stock del producto: " . "$reg[cantidad]</p>";
                
            }
        print "</div>";
            print "<br />";
        print "<div style='background:blue'>";
            while ($reg = mysqli_fetch_array($productos)) {
                echo "<p>Precio del producto: " . "$reg[precio]</p>";
                echo "<p>Stock del producto: " . "$reg[cantidad]</p>";
            }
        print "</div>";



    


        mysqli_close($conexion);
    ?>
</body>
</html>