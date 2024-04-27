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
     * Llenar dos arreglos A y B de 8 elementos cada uno, sumar el elemento uno
     *del arreglo A con el elemento uno del arreglo B y así sucesivamente hasta
     *el elemento 8, almacenar el resultado en un arreglo C e imprimirlo.
     */
    $a=[
        "0"=> 10,
        "1"=> 34,
        "2"=> 123,
        "3"=> 65,
        "4"=> 53,
        "5"=> 43,
        "6"=> 565,
        "7"=> 4,     
    ];
    $b=[
        "0"=> 1000,
        "1"=> 34,
        "2"=> 1,
        "3"=> 65,
        "4"=> 5,
        "5"=> 4,
        "6"=> 56,
        "7"=> 46,
    ];
    //Se utliza un ciclo, para hacer la suma de los dos arreglos, y se almacena en un arreglo
    for ($i = 0; $i <=7;$i++) {
        $suma["$i"] = $a["$i"] + $b["$i"];
    }
    print_r($suma);
    ?>
</body>
</html>