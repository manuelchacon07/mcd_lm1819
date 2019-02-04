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

        $hora = date("H");
        if ($hora >= 8 && $hora <= 12) {
            echo "Buenos dias";
        } else if ($hora > 12 && $hora <= 20) {
            echo "Buenas tardes";
        } else {
            echo "Buenas noches";
        }
    ?>


</body>
</html>