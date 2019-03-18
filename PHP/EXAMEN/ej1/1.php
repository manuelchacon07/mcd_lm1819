<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <!--
    Realice el siguiente programa. Cree un formulario para calcular el área y el perímetro de un rectángulo.
    En el formulario principal deben aparecer dos cajas de texto para indicar la base y la altura del rectángulo.
    Además, añadir un radiobutton para indicar si lo que queremos calcular es el área o el perímetro.
    Cuando se pulse en el botón “Calcular” debe mostrar el resultado en la siguiente pantalla.
    -->

    <!--
        Puntos a mejorar:
            1. Los radiobutton son con el mismo name, sino, ambos serán seleccionables y habrá un error al ejecutar el código.
            2. Si metes en todos los imput un 'required' no te hará falta meter tantos IF en el código PHP para corregir errores.
     -->
    <form action="2.php" method="GET">
    
        <label for="base">Base: </label>
        <input type="number" id="base" name="base" required></br>
        <label for="altura">Altura: </label>
        <input type="number" id="altura" name="altura" required></br>
        <label for="area">área: </label>
        <input type="radio" name="option" value="0" required> </br>
        <label for="perimetro">perímetro: </label>
        <input type="radio" name="option" value="1" required> </br>

        <input type="submit" value="Calcular">
    </form>

</body>
</html>