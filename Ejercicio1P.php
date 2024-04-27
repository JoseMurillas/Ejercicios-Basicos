<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $filas = $_GET["filas"];

    echo "<table border='1'>
            <tr>
                <th>Número</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Dirección</th>
                <th>Correo</th>
            </tr>";

    // Crear las filas de la tabla
    for($i = 1; $i <= $filas; $i++) {
        echo "<tr>
                <td>$i</td>
                <td>Nombre $i</td>
                <td>Telefono $i</td>
                <td>Dirección $i</td>
                <td>Correo $i</td>
                </tr>";
    }

    echo "</table>";
    ?>
</body>
</html>
