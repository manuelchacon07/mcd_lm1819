<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>tercero</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div style="margin: 0 auto; width: 250px">

        <?php
            print "<p>Fecha de nacimiento: $_REQUEST[edad]</p>";
            print "<p>Fecha Actual:" . date('Y-m-d') . "</p>";

            //calcular la diferencia entre fecha de nacimiento y fecha actual
            list($year, $month, $day) = explode("-", $_REQUEST['edad']);
            $year_d = date("Y") - $year;
            $mes_d = date("m") - $month;
            $dia_d = date("d") - $day;

            if ($dia_d < 0 || ($mes_d = 0 && $dia_d < 0)) {
                $year_d--;
            }

            session_start();
            print "<p>Bienvenido $_SESSION[user]</p>";
            print "<p>Su edad es $year_d años</p>";
        ?>
    
    </div>
</body>
</html>