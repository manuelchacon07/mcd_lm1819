<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>segundo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php

        $ref = filter_var($_SERVER['HTTP_REFERER'], FILTER_VALIDATE_URL);
        if (!empty($ref)) {
            echo "<p><a href='$ref'>Volver</a></p>";
        } else {
            echo "<p><a href='javascript:history.go(-1)'>Volver</a></p>";
        }

        $user = trim(htmlspecialchars($_REQUEST["user"], ENT_QUOTES, "UTF-8"));
        $pass = trim(htmlspecialchars($_REQUEST["pass"], ENT_QUOTES, "UTF-8"));

        if (empty($user) || empty($pass)) {
            header('location: primero.php?error=Debe rellenar los campos');
        } else if ($pass != "1234") {
            header('location: primero.php?error=Contraseña incorrecta');
        } else {
            setcookie("userweb", $user, time()+60*60*24*365);

            session_start();
            $_SESSION['user'] = $user;

    ?>

            <div style="margin: 0 auto; width: 200px">
                <form method="GET" action="tercero.php">
                    <p>
                        <label for="edad">Edad: </label>
                        <input type="date" name="edad" id="edad">
                    </p>
                    <p>
                        <input type="submit" value="Enviar">
                    </p>
                </form>
            </div>

    <?php
        }
    ?>
</body>
</html>