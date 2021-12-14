<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
    $saltoLinea = "<br>";
    // Establecer la zona horaria predeterminada a usar. Disponible desde PHP 5.1
    date_default_timezone_set('UTC');


    // Imprime algo como: Monday
    echo date("l");
    echo $saltoLinea;

    // Imprime algo como: Monday 8th of August 2005 03:12:46 PM
    echo date('l jS \of F Y h:i:s A');
    echo $saltoLinea;

    // Imprime: July 1, 2000 is on a Saturday
    echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));
    echo $saltoLinea;

    /* Usar las constantes en el parámetro de formato */
    // Imprime algo como: Wed, 25 Sep 2013 15:28:57 -0700
    echo date(DATE_RFC2822);
    echo $saltoLinea;

    // Imprime algo como: 2000-07-01T00:00:00+00:00
    echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));
    echo $saltoLinea;
    ?>
    <br>
    <br>
    <a href="count.php">Prev</a> |
    <a href="empty.php">Next</a>
</body>
</html>
