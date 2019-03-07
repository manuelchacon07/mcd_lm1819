<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>tercera</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        //mostrará al usuario un mensaje de bienvenida con su nombre de usuario y su edad en años
        $date = strtotime(date("d-m-y"));
        $fecha= strtotime($_REQUEST['date']);
        $edtotal = $date - $fecha;
    
        print "Bienvenido " . $_COOKIE['user'] . "<br>";
        print "Su edad es " . floor(($edtotal/60/60/24/365));
    
    ?>
</body>
</html>