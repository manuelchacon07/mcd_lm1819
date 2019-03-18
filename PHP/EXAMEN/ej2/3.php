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
        $imc = ($peso/($altura*$altura));
        session_start();
        $name = $_SESSION['user'];
        
        if ($imc < 18.5 ) {
           echo "Hola $name, estas en BAJO PESO";
        } elseif ($imc >= 18.5 || $imc <= 24) {
            echo "Hola $name, tu pero es NORMAL";
        }elseif ($imc >= 25 || $imc <= 29.9) {
            echo "Hola $name, estas en SOBREPESO";
        }elseif ($imc > 29.9) {
            echo "Hola $name, tiene OBESIDAD";
        }
    
    ?>
</body>
</html>