<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
    $a[0] = 1;
    $a[1] = 3;
    $a[2] = 5;
    var_dump(count($a));

    echo "<br>";

    $b[0]  = 7;
    $b[5]  = 9;
    $b[10] = 11;
    $b[12] = 13;
    var_dump(count($b));

    /* var_dump(count(null)); */

    /* var_dump(count(false)); */

    /* Si el parámetro opcional mode está establecido a COUNT_RECURSIVE (o 1), 
     * count() contará el array de forma recursiva. Esto es particularmente
     * útil para contar todos los elementos de un array multidimensional. */

    $comida = array('frutas' => array('naranja', 'plátano', 'manzana'),
                'verduras' => array('zanahoria', 'col', 'guisante'));

    // Cuenta recursiva
    echo "<br>";
    echo count($comida, COUNT_RECURSIVE); // muestra 8

    // Cuenta normal
    echo "<br>";
    echo count($comida); // muestra 2
    ?>

   <br>
   <br>
    <a href="chr.php">Prev</a> |
    <a href="date.php">Next</a>
</body>
</html>
