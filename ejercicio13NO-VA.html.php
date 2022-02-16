<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio13</title>
</head>
<body>
    <form action="ejercicio13.html.php">
        <p>Introduzca un número: <input type="text" name="num1"></p>
        <p>Introduzca un número: <input type="text" name="num2"></p>
        <p>Introduzca un número: <input type="text" name="num3"></p>
        <input type="submit" value="submit">
        <?php
            $numeros = array($_REQUEST["num1"],$_REQUEST["num2"],$_REQUEST["num3"]);
            if (!is_int($num1) || !is_int($num2) || !is_int($num3)) {
                echo "<p>Introduce tres valores enteros</p>";
            } else {
                asort($numeros);
                foreach ($numeros as $clave => $valor) {
                    echo $numeros;
                }
            }
        ?>
    </form>
</body>
</html>