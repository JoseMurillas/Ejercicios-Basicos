<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Se crean las dos matrices con los datos predeterminados
    $arreglo[0]["numero"]="1";
    $arreglo[0]["nombre"]="Diego";
    $arreglo[0]["telefono"]="3545435";
    $arreglo[0]["direccion"]="Transversal 19";
    $arreglo[0]["correo"]="3153143897";

    $arreglo[1]["numero"]="2";
    $arreglo[1]["nombre"]="Oscar";
    $arreglo[1]["telefono"]="434584309";
    $arreglo[1]["direccion"]="Calle 93";
    $arreglo[1]["correo"]="3519029309";

    //Se crea la tabla donde se va almacenar por columnas y filas
    echo "<table border='1'>
            <tr>
                <th>Número</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Dirección</th>
                <th>Correo</th>
            </tr>";
    //El ciclo for va recorrer las filas y almacenando la informacion en cada columna utilizando un foreach 
    for( $i= 0; $i< 1; $i++ ) {
        foreach($arreglo as $elemento){
            echo "<tr>";
            foreach ($elemento as $key => $value) {
                echo "<td>$value</td>";
            }
            echo "</tr>";
         }
    }
    echo"</table>";
    
    ?>
</body>
</html>
