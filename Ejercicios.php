<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
</head>
<body>
    <?php
    //Ejercicio 1
    //Se declara una variable con mi nombre, la cual se va imprimir por pantalla
    $nombreCompleto = "Jose Alejandro Murillas Zuñiga";
    echo $nombreCompleto,"<br>";
    
    //Ejercicio 2
    /*Se declaran dos variables, las cuales tiene dos numeros de tipo entero
    en la tecera se hace la operacion de la suma y por ultimo se muestra el resultado
    */
    $numero1 = 20;
    $numero2 = 2;
    echo "<br>El resultado de las dos sumas: ", $numero1+$numero2,"<br>";

    //Ejercicio 3
    //Se crea una variable constante donde va tener el curso y se imprime por una pantalla
    define("curso","tecnico de programción de software - TPS2-121");
    echo "<br>El nombre del programa y curso es: ", curso;

    //Ejercicio 4
    //Se crean 2 variables una para los nombres y otra para los apellidos y al final se va a concatenar y se imprime en pantalla
    $nombre = "<br><br>Jose Alejandro";
    $apellido = "Murillas Zuñiga";
    echo $nombre," ", $apellido;

    //Ejercico 5
    //Se crearan dos variables, con ellos se haran 4 operaciones suma, resta, multiplicacion y division
    $numero3 = 300;
    $numero4 = 20;

    $suma = $numero3 + $numero4;
    $resta = $numero3 - $numero4;
    $multiplicacion = $numero3 * $numero4;
    if($numero3 != 0 and $numero4 != 0){
        $division = $numero3 / $numero4;
    }else{
        echo "Ingrese un valor mayor a 0";
    }
    echo"<br><br>La suma es :",$suma,"<br>La resta es: ", $resta,"<br>La multiplicacion es: ",$multiplicacion,"<br>La división es: ", $division;

    ?>

</body>
</html>