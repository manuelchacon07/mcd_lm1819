<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>primero</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    <div style="margin: 0 auto; width: 200px">
        <div>
            <?php
                if (isset($_REQUEST["error"])) {
                    print "<p style='color: red'> $_REQUEST[error] </p>";
                }
            ?>
        </div>

        <form method="POST" action="segundo.php">
        
            <p>
                <label for="user">Usuario: </label>
                <input type="text" name="user" id="user" value="<?php if (isset($_COOKIE["userweb"])) { echo $_COOKIE["userweb"]; } ?>">
            </p>
            <p>
                <label for="pass">Contraseña: </label>
                <input type="text" name="pass" id="pass">
            </p>
            <p>
                <input type="submit" value="Entrar">
            </p>
        
        </form>
    </div>

</body>
</html>