<?php
    //Realice un formulario para solicitar una temperatura y un desplegable que indique que tipo de temperatura es,
    //con las opciones “Celsius” o “Fahrenheit”. Al pulsar el botón convertir convertirá la temperatura en la otra unidad.
    //Deben ser valores decimales, no puede ser inferior a -273,15 ºC o -459,67 ºF.
    //Para obtener el resultado despejar la siguiente fórmula “F - 32 = 1,8 * C”. Presentar el resultado con 2 decimales.

    $temp = trim(htmlspecialchars($_REQUEST["temp"], ENT_QUOTES, "utf-8"));
    $unit = trim(htmlspecialchars($_REQUEST["unit"], ENT_QUOTES, "utf-8"));

    if (!is_numeric($temp) && empty($temp)) {
        print "<p>Introduce un numero</p>";
    } else if ($unit == "fa" && !($temp<-459.67)) {
        $temp_r = round((1.8 * $temp)+32, 2);
        print "<p>$temp son $temp ºF</p>";
    } else if ($unit = "ce" && !($temp<-273.15)) {
        $temp_r = round(($temp -32)/1.8, 2);
        print "<p>$temp son $temp_r ºC</p>";
    } else {
        print "<p>No has introducido un valor correcto</p>";
    }


?>

