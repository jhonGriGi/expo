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

    /* El siguiente ejemplo demuestra como crear un array de dos dimensiones, como especificar claves para un array 
        * \asociativo y como omitir y continuar índices numéricos en array normales. */

    echo "<h2>Ejemplo de array()</h2>";

    $fruits = array (
        "frutas"  => array("a" => "naranja", "b" => "plátano", "c" => "manzana"),
        "números" => array(1, 2, 3, 4, 5, 6),
        "hoyos"   => array("primero", 5 => "segundo", "tercero")
    );

    foreach ($fruits as $key => $val) {
        echo " $key = $val\n<br>";
    }


    echo $saltoLinea;
    echo $saltoLinea;

    print_r($fruits);

    echo $saltoLinea;
    echo $saltoLinea;

    /* Nótese que el índice '3' se ha definido en dos ocasiones y mantiene su valor final de 13.
     * El índice 4 se ha definido después del índice 8 y el siguiente índice generado (valor 19) es 9,
     * ya que el índice mayor era 8. */ 

    echo "<h2>Con índice automático</h2>";

    $array = array(1, 1, 1, 1,  1, 8 => 1,  4 => 1, 19, 3 => 13);
    print_r($array);

    echo $saltoLinea;
    echo $saltoLinea;

    echo "<h2>Con índice de base 1</h2>";

    $firstquarter = array(1 => 'Enero', 'Febrero', 'Marzo');
    print_r($firstquarter);

    echo $saltoLinea;
    echo $saltoLinea;

    echo "<h2>Accediendo al array desde doble comillas</h2>";

    $foo = array('bar' => 'baz');
    echo "Hola {$foo['bar']}!"; // Hola baz!

    echo $saltoLinea;
    echo $saltoLinea;

    echo "<h2>Forma corta</h2>";

    $a = [1, 2, 3, 4];
    print_r($a);
?>
    <br>
    <br>
    
    <a href="arsort.php">Next</a>
</body>
</html>
