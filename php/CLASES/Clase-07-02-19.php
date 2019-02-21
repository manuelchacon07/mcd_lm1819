<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="background: rgb(120, 176, 217);">
    <?php

    $j=0;
    $result;

        while ($j <= 10) {
            echo "<div style='float: left; margin: 2%; background: rgb(29, 176, 217)'>";
            for ($i=0; $i <= 10 ; $i++) { 
                $result=$i*$j;
                echo $j . "x" . $i . "=" . $result . "<br />";

            }
            echo "</div>";
            $j++;
        }
       

    ?>
</body>
</html>