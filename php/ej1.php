<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
    <?php
    
    $valores = rand(1, 10);

    if ($valores < 5) {
        echo '<p style="color: red;">El valor ' .  $valores . ' es menor que 5</p>';
    }
    elseif ($valores > 5) {
        echo '<p style="color: blue;">El valor ' . $valores . ' es menor que 5</p>';
    }

    else {
        echo '<p style="color: green;">El valor ' . $valores . ' es igual que 5</p>';
    }
    
    ?>
</body>
</html>