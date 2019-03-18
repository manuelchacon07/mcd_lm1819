<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <!--
    Realice el siguiente programa. En la primera pantalla se debe solicitar el nombre al usuario. 
    Este nombre debe quedar guardado en sesión. En la segunda pantalla debe solicitar su peso y su altura. 
    En la tercera pantalla debe mostrar el siguiente mensaje en función de su índice de masa corporal (imc).

    IMC = peso (kg) / altura² (metros)
    imc<18.5 -> "BAJO PESO"
    imc>=18.5 y imc<=24.9 -> "NORMAL"
    imc>=25 y imc<=29.9 -> "SOBREPESO
    imc>29.9 -> "OBESIDAD"
    -->

    <?php
        $peso = trim(htmlspecialchars($_REQUEST["peso"], ENT_QUOTES, "utf-8"));
        $altura = trim(htmlspecialchars($_REQUEST["altura"], ENT_QUOTES, "utf-8"));
        // Se puede usar ($altura**2) para indicar un valor elevado al cuadrado.
        /*
            Para cumplir con la fórmula de cálculo del IMC se pasa la altura en centímetros,
            luego se divide entre 100 para tener la altura en metros y finalmente se eleva
            al cuadrado.

            Se pasa la altura en centímetros dado que los navegadores pueden entender la coma
            como "." o como ",", por lo que nos ahorramos tener que realizar otra validación del
            carácter.
            Además, con algunos navegadores (Firefox por ejemplo), no se pueden ponen en
            campos number un valor con decimales.
        */
        $imc = ($peso/(($altura/100)**2));
        session_start();
        $name = $_SESSION['user'];
        /* GRAVE: El || significa lo siguiente:
            ($imc >= 18.5 || $imc <= 24) => Si el IMC es mayor o igual a 18.5 O el IMC es menor o igual a 24
            realiza el condicionante.
            Es decir, si alguna de las condiciones es verdadera ejecutará el código
            Para que obligue a que ambos condicionantes sean verdaderos hay que poner &&
        */
        if ($imc < 18.5 ) {
           echo "Hola $name, estas en BAJO PESO.";
        } elseif ($imc >= 18.5 && $imc <= 24.9) {
            echo "Hola $name, tu pero es NORMAL.";
        }elseif ($imc >= 25 && $imc <= 29.9) {
            echo "Hola $name, estas en SOBREPESO.";
        }else {
            // No es necesario cerrar con elseif, pues solo quedan los valores por descarte.
            echo "Hola $name, tiene OBESIDAD.";
        }
    
    ?>
</body>
</html>