<?php

    $autor=trim(htmlspecialchars($_REQUEST["autor"], ENT_QUOTES, "utf-8"));
    $titulo=trim(htmlspecialchars($_REQUEST["titulo"], ENT_QUOTES, "utf-8"));
    $categoria=trim(htmlspecialchars($_REQUEST["categoria"], ENT_QUOTES, "utf-8"));
    $fecha=trim(htmlspecialchars($_REQUEST["fecha"], ENT_QUOTES, "utf-8"));
    $texto=trim(htmlspecialchars($_REQUEST["texto"], ENT_QUOTES, "utf-8"));

    $conexion = mysqli_connect("db4free.net:3306", "adminies", "Adminies", "bddrss") or die("Problemas en la conexion");

    mysqli_query($conexion, "INSERT INTO noticias(autor,titulo,categoria,noticia)
    VALUES('$autor','$titulo','$categoria','$texto')") or die("Problemas en la consulta ".mysqli_error($conexion));


    mysqli_close($conexion);


?>
