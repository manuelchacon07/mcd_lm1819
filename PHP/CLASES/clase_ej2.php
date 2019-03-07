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
        //$i=10;
        //$resul=0;
        //for ($i; $i >= 0 ; $i--) { 
           // $resul=$i*166.386;
            //echo "$i € es igual a $resul";
       // }

        define("PESETAS", 166.386);

        for ($i=1; $i <= 10 ; $i++) { 
            print ("$i € = " . $i*PESETAS . "pts<br/>");
        }

    ?>

</body>
</html>