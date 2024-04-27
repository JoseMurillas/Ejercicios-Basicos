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
     * Almacenar 10 números en un arreglo A, después almacenarlos en otro
     *arreglo B, pero en orden inverso al arreglo original, imprimir el arreglo B.
    */
    $a= [
        "0"=> 10,
        "1"=> 34,
        "2"=> 123,
        "3"=> 65,
        "4"=> 53,
        "5"=> 43,
        "6"=> 2,
        "7"=> 4,
        "8"=> 9,
        "9"=> 10,
    ];
    //Se crea un ciclo el cual se inicializa desde el tamaño maximo del arreglo y que vaya disminuyendo hasta 0
    for( $i= 9; $i >= 0; $i-- ){
        $b[$i] = $a[$i];
    }
    //se imprime el arreglo, utilizando la funcion print_r()
    print_r($b);
    ?>
</body>
</html>