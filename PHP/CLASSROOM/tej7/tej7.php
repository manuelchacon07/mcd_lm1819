<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>tej7.php</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
    <form action="tej7.1.php" >

        <label for="mail">Email: </label>
        <input type="email" name="mail" id="mail" required>
        <p><?php if (isset($_COOKIE["error"])) { print $_COOKIE["error"];}?></p>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>