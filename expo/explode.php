<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
        $saltoLinea = "<br>";

        echo "<h2>Ejemplo 1</h2>";
        // Ejemplo 1
        $pizza  = "porción1 porción2 porción3 porción4 porción5 porción6";
        $porciones = explode(" ", $pizza);
        echo $porciones[0]; // porción1
        echo $saltoLinea;
        echo $porciones[1]; // porción2

        echo "<h2>Ejemplo 2</h2>";
        // Ejemplo 2
        $datos = "foo:*:1023:1000::/home/foo:/bin/sh";
        list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $datos);
        echo $user; // foo
        echo $saltoLinea;
        echo $pass; // *
        echo $saltoLinea;
        echo $uid;
        echo $saltoLinea;

        echo "<h2>Ejemplo 3</h2>";
        $entrada1 = "hola";
        $entrada2 = "hola,qué tal";
        var_dump( explode( ',', $entrada1 ) );
        echo $saltoLinea;
        var_dump( explode( ',', $entrada2 ) );

        echo "<h2>Ejemplo 4</h2>";
        $str = 'uno|dos|tres|cuatro';

        // límite positivo
        print_r(explode('|', $str, 2)); // Longitud de indices

        echo $saltoLinea;

        // límite negativo
        print_r(explode('|', $str, -1)); // Longitud de elementos
    ?>
</body>
</html>
