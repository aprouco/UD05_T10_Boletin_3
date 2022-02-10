<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio6</title>
</head>
<body>
    <form action="ejercicio6.html.php">
        <p>Introduce el valor de la altura: <input type="text" name="h"></p>
        <input type="submit" value="submit">
    </form>
    <?php

        $h=isset($_REQUEST["h"])?$_REQUEST["h"]:0;

        if ($h == 0) {
            echo "Valor incorrecto. Introduce otro número";
        }else{
            $t=sqrt((2 * $h) / 9.81);
            echo "t = ".$t;
        }      
        
    ?>
</body>
</html>