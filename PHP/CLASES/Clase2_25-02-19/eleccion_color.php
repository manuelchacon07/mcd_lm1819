<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>eleccion de color</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        $color = trim(htmlspecialchars($_REQUEST["color"], ENT_QUOTES, "utf-8"));
        if(isset($_REQUEST['color'])) {
            setcookie("rcolor",$color,time()+60*60*24*365);
        } else {
            setcookie("rcolor",$color,time()-1000);
        }
        header('location:color.php');
    ?>
</body>
</html>