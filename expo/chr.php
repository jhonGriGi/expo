<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php 
        echo "<h2>Chr()</h2>";
        echo " Devuelve una cadena de un caracter que contiene el carácter especificado por ascii<br>";

        $str = "La cadena termina en un escape: <br>";

        echo $str;

        $str .= chr(27); /* añade un carácter de escape al final de  $str */

        echo $str;

        $str .= chr(192);

        echo $str; // Se le agrega un carácter
    ?>
    <br>
    <br>

    <a href="arsort.php">Prev</a> |
    <a href="count.php">Next</a>
</body>
</html>
