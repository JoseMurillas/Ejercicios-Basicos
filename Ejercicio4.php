<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //El ejercicio nos pide imprimir los 6 tipos de titulos que tiene las etiquetas <h> 
    
    //Se crea un ciclo for el cual va inicializar en 1 hasta que igual a 6, con un incremento de 1 a 1
    for($i=1; $i <= 6; $i++){
        echo "<h$i>Hola</h$i>";
    }
    ?>
</body>
</html>