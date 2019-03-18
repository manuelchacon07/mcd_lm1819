<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
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
    $name = trim(htmlspecialchars($_REQUEST['name'], ENT_QUOTES, "utf-8"));
    session_start();
    $_SESSION['user'] = $name;
    ?>
    <form action="3.php">
        <label for="peso">peso: </label>
        <input type="number" name="peso" id="peso" required>
        <label for="altura">altura: </label>
        <input type="number" name="altura" id="altura" required>

        <input type="submit" value="enviar">
    </form>
</body>
</html>