<?php

    header('Content-type: text/xml; charset="iso-8859-1"', true);

    echo '<?xml version="1.0" encoding="iso-8859-1"?>';

    $conexion = mysqli_connect("db4free.net:3306", "adminies", "Adminies", "bddrss") or die("Problemas en la conexion");

    $registros=mysqli_query($conexion, " SELECT * FROM noticias order by fecha desc") or die("Problemas en la consulta ".mysqli_error($conexion));

    echo '<rss version="2.0">';
    echo '<channel>';
        echo '<title>Noticias IES</title>';
        echo '<link>https://webrssies.000webhostapp.com</link>';
        echo '<language>es</language>';
        echo '<description>Canal de noticias del IES</description>';

        while ($reg = mysqli_fetch_array($registros) {
            echo '<item>';
                echo '<title>'.$reg[titulo].'</title>';
                echo '<link>''</link>';
                echo '<pubDate>'.$reg[fecha].'</pubdate>';
                echo '<category>'.$reg[categoria].'</category>';
                echo '<description>'.$reg[noticia].'</description>';
            echo '</item>';
        }


    echo '</channel>';
    echo '</rss>';


    mysqli_close($conexion);

?>