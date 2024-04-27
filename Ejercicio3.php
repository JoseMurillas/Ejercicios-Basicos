<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="AdsoTrimestre.php" method="get">
        <fieldset>
            <legend>Elige en que trimestre estas</legend>
            <?php 
            //El ejericio pide crear radios en html para que el usuario pueda seleccionar en que trimestre esta
            for($i = 1; $i <=9; $i++){
                //Se utiliza un ciclo for, el cual va iniciar desde 1 hasta que sea menor igual 9 con un incremento de 1 a 1
                echo "<label>
            <input type= radio value= trimestre name = grupoBt > $i
            </label>";
                }
            ?>
        </fieldset>
    </form>
    
</body>
</html>