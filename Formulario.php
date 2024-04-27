<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php
    //Ejercicio 6
    /*Se llama la variable anhoNacimiento, el cual nos va captura la informacion metidiante el metodo REQUEST
    desde el formulario con el metodo GET O POST
    */
    $edad = 2024 - $_REQUEST["anhoNacimiento"];
    echo"Su nombre: ". $_REQUEST["nombre"] ." ". $_REQUEST["apellido"]. "<br> Su edad: ".$edad;
    ?>
</body>
</html>