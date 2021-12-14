<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php 
    $primerMensaje = "El array sin ordenar es:";
    $segundoMensaje = "El array ordenado es:";
    $saltoLinea = "<br>";

    $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

    echo "<h2>Arsort()</h2>";

    echo $primerMensaje;

    foreach ($fruits as $key => $val) {
        echo " $key = $val\n";
    }

    echo $saltoLinea;

    arsort($fruits);

    echo $segundoMensaje;

    foreach ($fruits as $key => $val) {
        echo " $key = $val\n";
    }

    echo $saltoLinea;
    echo "Las frutas han sido ordenadas en orden inverso alfabético, 
            se ha mantenido el índice asocidado con cada elemento. ";

    $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

    echo $saltoLinea;
    echo "<h2>Asort()</h2>";
    echo $primerMensaje;

    foreach ($fruits as $key => $val) {
        echo " $key = $val\n";
    }

    asort($fruits);

    echo $saltoLinea;
    echo $segundoMensaje;

    foreach ($fruits as $key => $val) {
        echo " $key = $val\n";
    }

    echo $saltoLinea;
    echo " Las frutas han sido ordenadas alfabeticamente, 
            y se ha mantenido el índice asociado con cada elemento. ";

    ?>

    <br>
    <br>
    
    <a href="array.php">Prev</a> | 
    <a href="chr.php">Next</a>

</body>
</html>
