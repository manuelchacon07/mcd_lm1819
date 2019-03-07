<?php
    //Escriba un formulario que indique que tabla de multiplicar queremos mostrar. 
    //El número debe ser entero positivo entre 1 y 100

    $table = trim(htmlspecialchars($_REQUEST["table"], ENT_QUOTES, "utf-8"));

    if ($table>=1 && $table<=100) {
            for ($i=0; $i <= 10 ; $i++) { 
                $num=$i*$table;
                echo $table . "x" . $i . "=" . $num . "<br />";
            }
    } else {
        print "Introduce un numero entre 1 y 100";
    }

?>