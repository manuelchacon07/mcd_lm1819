<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Menu METEO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <div style="margin-left:10%; margin-right:10%">
        <form action="buscar.php">
            <!--ambos tienen que ser abligatorios porque se cogen a la vez-->
            <label for="fecha_d"><p class="font-weight-bold">Fecha desde </p></label>
            <input type="date" class="form-control" name="fecha_d" id="fecha_d">
            <br>
            <label for="fecha_h"><p class="font-weight-bold">Fecha hasta </p></label>
            <input type="date" class="form-control" name="fecha_h" id="fecha_h">
            <br>
            <!--FINNN-->

            <!--Buscar por nombre en la tabla variable-->
            <label for="tMedida"><p class="font-weight-bold">Tipo de medida</p></label>
            <select name="tMedida" id="tMedida">
                <option value=""></option>
            </select>
            <br>
            <!--Buscar por valor de medida en la relacion mide-->
            <label for="vMedida_d"><p class="font-weight-bold">valor de medida desde </p></label>
            <input type="text" class="form-control" name="vMedida_d" id="vMedida_d">
            <br>
            <!--Buscar por valor de medida en la relacion mide-->
            <label for="vMedida_h"><p class="font-weight-bold">valor de medida hasta </p></label>
            <input type="text" class="form-control" name="vMedida_h" id="vMedida_h">

        </form>
    </div>









    <nav>
    <ul class="pagination justify-content-center">
        <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
        <a class="page-link" href="#">Next</a>
        </li>
    </ul>
    </nav>
</body>
</html>