<?php

    $xmlstr = <<<XML
    <?xml version='1.0' standalone='yes'?>
    <peliculas>
        <pelicula>
            <titulo>Ultima clase de LM</titulo>
            <personajes>
                <personaje>
                    <nombre>profesor</nombre>
                    <actor>yo y yo</actor>
                </personaje>
                <personaje>
                    <nombre>Alumno</nombre>
                    <actor>El alumno</actor>
                </personaje>
            </personajes>
            <argumento>Esta es la ulitma clase del curso</argumento>
            <grandes-frases>
                <frase>No es evaluable. Es conocimiento</frase>
            </grandes-frases>
            <puntuacion tipo="votos">20</puntuacion>
            <puntuacion tipo="estrellas">5</puntuacion>
        </pelicula>
    </peliculas>
    XML;

?>