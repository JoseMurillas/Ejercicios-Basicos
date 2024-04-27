<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select name="" id="">
    <?php
        //El ejercicio nos pide crear un radio donde el usuario pueda seleccionar de un ahno especifico
       $i = 1900;
       //Se utiliza un while para que haga las iteraciones desde 1900 a 2024.
        while($i <= 2024){
            echo "<option>$i</option>";
            $i++;
        }
    ?>
    </select>
</body>
</html>