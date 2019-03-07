<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>primera</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <form action="segunda.php">
        <label for="user">Usuario: </label>
        <input type="text" name="user" id="user" value="<?php print $_COOKIE['user']; ?>"><br>

        <label for="pass">Contraseña: </label>
        <input type="text" name="pass" id="pass"><br>

        <input type="submit" value="Enviar"><br>
        <?php 
            print $_COOKIE['error'];
        ?>
    </form>

</body>

</html>