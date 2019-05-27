<?php
include 'archivo.php';

$peliculas = new SimpleXMLElement($xmlstr);

//Mostrar argumento

echo $peliculas->pelicula[0]->argumento . "<br>";


//Mostrar la frase

echo $peliculas->pelicula[0]->{'grandes frases'}->frase . "<br>";

//for orientado a objeto

foreach ($peliculas->pelicula->personajes->personaje as $p) {
    echo $p->nombre . " - " . $p->actor . "<br>";
}
//for orientado a objeto

foreach ($peliculas->pelicula->puntuacion as $puntos) {
    switch ($puntos['tipo']) {
        case 'votos':
            echo "Votos: " . $puntos;
            break;
        case 'estrellas':
            echo "Estrellas: " . $puntos;
            break;
        default:
            break;
    }
}

//Modificar la informacion

$peliculas->pelicula[0]->personajes->personaje[0]->nombre = 'Mi profesor';

echo $peliculas->asXML();
?>