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

    <form action="2.php">
    
        <label for="base">Base: </label>
        <input type="number" id="base" name="base"><br>
        <label for="altura">Altura: </label>
        <input type="number" id="altura" name="altura"><br>
        <label for="area">área: </label>
        <input type="radio" name="area" value="0"> <br>
        <label for="perimetro">perímetro: </label>
        <input type="radio" name="perimetro" value="1">

        <input type="submit" value="Calcular">
    </form>

</body>
</html>