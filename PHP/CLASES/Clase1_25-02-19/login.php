<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="remember.php">
        <p>
            <label for="email">Correo Electronico: </label>
            <input type="email" name="email" id="email" value="<?php print $_COOKIE['r_email']; ?>">
        </p>
        <p>
            <label for="pass">Contraseña: </label>
            <input type="password" name="pass" id="pass">
        </p>
        <p>
            <label for="rem">¿Recordar correo Electronico?: </label>
            <input type="checkbox" name="rem" id="rem">
        </p>
        <p>
            <input type="submit" value="Enviar">
        </p>
    </form>
</body>
</html>