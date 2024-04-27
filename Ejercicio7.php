<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    /**
     * Calcular el promedio de 10 valores almacenados en un arreglo. Determinar
     *además cuantos son mayores que el promedio, imprimir el promedio, el
     *número de datos mayores que el promedio y la lista de valores mayores
     *que el promedio.
     */
    $arreglo = [
        "0"=> 10,
        "1"=> 34,
        "2"=> 123,
        "3"=> 65,
        "4"=> 53,
        "5"=> 43,
        "6"=> 565,
        "7"=> 4,
        "8"=> 9,
        "9"=> 10,
    ];
    //Se inicializa una varaible para almacenar la suma
    $suma = 0;
    //Se utiliza un ciclo for en este caso que de 10 vueltas, por el tamaño del arreglo
    for ($i = 0; $i <= 9; $i++) {
        $suma = $suma + $arreglo[$i];
    }
    //Se imprime el promedio de los 10 numeros
    echo"El promedio es: ",($suma/10) ;
    
    ?>
    
</body>
</html>