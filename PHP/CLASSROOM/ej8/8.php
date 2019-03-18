<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ejercicio 8</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

        <!--Añade un botón para insertar un producto en la base de datos.
            Muestra en el formulario todos los proveedores que existen en la tabla de proveedores.
        -->
    
    <form action="insertar.8.php">
        <div>
            <label for="id">ID: </label>
            <input type="number" id="id" name="id">
        </div>
        <div>
            <label for="description">Descripcion: </label>
            <input type="text" id="description" name="description">
        </div>
        <div>
            <label for="price">Precio: </label>
            <input type="number" id="price" name="price">
        </div>
        <div>
            <label for="stock">Cantidad: </label>
            <input type="number" id="stock" name="stock">
        </div>
        <div>
            <label for="pro">Proveedor: </label>
            <select name="pro" id="pro">
                <?php
                    $conexion = mysqli_connect("localhost", "root", "", "bdejemplo") or die("Problemas de conexion");
                    $registros = mysqli_query($conexion, "SELECT idProveedor, nombre FROM proveedores") or die("Problemas en el select" . mysqli_error($conexion));

                    while ($reg = mysqli_fetch_array($registros)) {
                        echo "<option value='$reg[idProveedor]'>$reg[nombre]</option>";
                    }
                ?>
            </select>
        </div>
        <div>
            <input type="submit" name="enviar">
        </div>
    </form>

    <?php

        //Muestra una consulta de todos los productos de la tabla productos mostrando el nombre completo del proveedor del producto...
        
        $productos = mysqli_query($conexion, "SELECT productos.`idProductos`, productos.`descripcion`, proveedores.`nombre` 
                                    FROM `productos`, `proveedores` WHERE proveedores.`idProveedor` = productos.`idProveedor`");

        $more = mysqli_query($conexion,"SELECT precio,cantidad 
                                FROM productos WHERE idProveedor in (SELECT idProveedor FROM proveedores)");

        $proveedores = mysqli_query($conexion,"SELECT Nombre 
                                        FROM proveedores WHERE idProveedor in (SELECT idProveedor FROM productos)");
    
        print "<div style:'display:inline-block; text-align:center;'>";
            print "<div style='clear:both; '>";
                while ($reg = mysqli_fetch_array($productos)) {
                    echo "<div style='background:red; float:left; margin: 2%; display:inline-block; text-align:center;'>";
                        echo "<p> ID del producto: " . "$reg[idProductos]</p>";
                        echo "<p> Descripcion: " . "$reg[descripcion]</p>";
                        echo "<p>Nombre del proveedor: " . "$reg[nombre]</p>";
                    echo "</div>";
                    
                }
            print "</div>";

            //Además, muestre un mensaje indicando el precio total de todos los productos y la cantidad de productos que tenemos en stock.

            print "<div style='clear:both;'>";
                while ($reg = mysqli_fetch_array($more)) {
                    echo "<div style='background:blue; float:left; margin:2%; display:inline-block; text-align:center;'>";
                        echo "<p>Precio del producto: " . "$reg[precio]</p>";
                        echo "<p>Stock del producto: " . "$reg[cantidad]</p>";
                    echo "</div>";
                }
            print "</div>";
        print "</div>";

        mysqli_close($conexion);

    ?>
</body>
</html>