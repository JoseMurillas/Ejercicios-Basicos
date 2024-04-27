<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //Se traen los datos mediante el metodo GET
    $fila = $_GET["filas"];
    $columna = $_GET["Columnas"];
    echo "<table border='1'>"; //se crea la tabla
        
        // Usando bucle for para generar las filas
        for ($i = 1; $i <= $fila; $i++) {
            echo "<tr>";// se crea la filas
            
            // Usando bucle while para generar las columnas
            $j = 1;
            while ($j <= $columna) {
                echo "<td>Columna $j</td>";
                $j++;
            }
            
            echo "</tr>";//se cierran las filas
        }
        
        echo "</table>";//se cierra la tabla
    ?>
</body>
</html>
