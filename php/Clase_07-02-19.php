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

    $mult=0;
    $mult1=0;
    $result=0;

        for ($i=0; $i < 10 ; $i++) { 
            while ($mult < 10) {
                $result=$mult*$mult1;
                $mult++;
                echo $mult . "x" . $mult1 . "=" . $result . "</br>";
            }
            
            
        }
    ?>
</body>
</html>