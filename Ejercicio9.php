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
     * Diseñe un algoritmo que lea un número cualquiera y lo busque en el arreglo
     *X, el cual tiene almacenados 10 elementos. Escribir la posición donde se
     *encuentra almacenado el número en el arreglo o el mensaje “No está
     *presente” si no lo encuentra.
     */
    $a = 9;
    $x= [
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
    //Se utiliza dos metodos, uno usando la funcion de array_search
    $ubicacion = array_search($a,$x);
    //Se utiliza un ciclo for el cual va hacer la busqueda del numero
    for($i=0;$i<=9;++ $i){
        if($a == $x[$i]){
            $mensaje ="La ubicacion: ".$i;
            break;
        }else{
            $mensaje = "No esta presente";
        }
    }
    echo $mensaje;
    ?>
</body>
</html>