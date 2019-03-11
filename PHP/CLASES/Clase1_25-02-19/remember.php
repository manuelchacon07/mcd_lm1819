<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>almecenar cookie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        $email = trim(htmlspecialchars($_REQUEST["email"], ENT_QUOTES, "utf-8"));
        if (isset($_REQUEST['rem'])) {
            setcookie("r_email",$email, time()+60*60*24*365);
        } else {
            setcookie("r_email",$email, time()-1000);
        }
    ?>
    <a href="login.php">VOLVER</a>
</body>
</html>

