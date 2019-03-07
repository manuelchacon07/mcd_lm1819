<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>segunda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <?php
        $user = trim(htmlspecialchars(strip_tags($_REQUEST["user"]), ENT_QUOTES, "UTF-8"));
        $pass = trim(htmlspecialchars(strip_tags($_REQUEST["pass"]), ENT_QUOTES, "UTF-8"));
        setcookie("user",$user, time()+60*60*24*365);
        //header('Location: index.php');


        if ("$pass" == "$user") {
            echo '
                <form action="tercera.php">
                <label for="date">Fecha de nacimiento: </label>
                <input type="date" name="date" id="date"><br>

                <input type="submit" value="Enviar"><br>
                </form>
            ';
        } else {
            
            setcookie("error","$pass no es correcta", time()+1);
            header('location: primera.php');
        }

    ?>
</body>
</html>

