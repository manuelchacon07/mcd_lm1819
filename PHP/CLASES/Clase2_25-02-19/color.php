<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fondo_color</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="background: <?php print $_COOKIE['rcolor']; ?>"> 
    
    <form action="eleccion_color.php">
    <label for="color">Elige un color</label>
    <select id="color">
        <option value="#FF0000" name="color">ROJO</option>
        <option value="#008000" name="color">VERDE</option>
        <option value="#0000FF" name="color">AZUL</option>
    </select>
    <input type="submit" value="Enviar">
    </form>
</body>
</html>