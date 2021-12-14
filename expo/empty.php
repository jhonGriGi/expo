<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
    /* Nota: */
    /* Antes de PHP 5.5, empty() sólo soportaba variables; cualquier otra cosa 
     * provocaría un error del intérprete. En otras palabras, lo siguiente no funcionaría: 
     * empty(trim($nombre)). En su lugar, utilice trim($nombre) == false. */

    /* Devuelve false si var existe y tiene un valor no vacío, distinto de cero. De otro modo devuelve true. */
    /* Los siguientes valores son considerados como vacíos: */

    /* "" (una cadena vacía) */
    /* 0 (0 como un integer) */
    /* 0.0 (0 como un float) */
    /* "0" (0 como un string) */
    /* null */
    /* false */
    /* array() (un array vacío) */
    $var = 0;

    // Se evalúa a true ya que $var está vacia
    if (empty($var)) {
        echo '$var es o bien 0, vacía, o no se encuentra definida en absoluto';
    }

    echo "<br>";

    // Se evalúa como true ya que $var está definida
    if (isset($var)) {
        echo '$var está definida a pesar que está vacía';
    }

    ?>
    <br>
    <br>
    <a href="date.php">Prev</a> |
    <a href="explode.php">Next</a>
</body>
</html>
