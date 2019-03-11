<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>cookies</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <p>
        <?php

            if(isset($_COOKIE['numbreusu'])) {
                print "Hola " . $_COOKIE['numbreusu'];
            } else {
                print "Hola Anonimo";
            }


        ?>
    </p>
    <p>
        <a href="segunda.php">Ir a segunda</a>
    </p>

</body>
</html>