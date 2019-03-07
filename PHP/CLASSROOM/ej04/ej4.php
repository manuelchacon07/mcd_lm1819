<?php
$numero = $_REQUEST["numero"];
$minutos;
$segundos;
if ($numero >= 0){
    $minutos= intdiv($numero, 60);
    $segundos= $numero%60;
    print "$numero segundos tiene $minutos minutos y $segundos segundos";
} else {
    print "Introduce un numero mayor que 0";
}

?>