<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /**Desarrollar un algoritmo en php que reciba como entrada 10 números en un
    arreglo y luego muestre el arreglo, lo pueden hacer así:
    a. Print_r($arreglo);
    b. Utilizar un ciclo y al recorrer el arreglo imprimirlo.*/

    //Se crea un arreglo con un tamaño de 10 espacios
    $arreglo = [
        "0"=> 1,
        "1"=> 2,
        "2"=> 3,
        "3"=> 4,
        "4"=> 5,
        "5"=> 6,
        "6"=> 7,
        "7"=> 8,
        "8"=> 9,
        "9"=> 10,
    ];
    //Se va imprimir el arreglo
    print_r($arreglo);
    //El ciclo hara la misma funcion de imprimir pero en este caso lo haremos sin la funcion print_r
    for($i=0; $i <= 9;$i++){
        echo "<br>",$arreglo[$i];
    }
    ?>
</body>
</html>