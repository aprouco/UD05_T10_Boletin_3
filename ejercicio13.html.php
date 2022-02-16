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
            $numeros = array();
            $num1 = intval($_REQUEST["num1"]);
            $num2 = intval($_REQUEST["num2"]);
            $num3 = intval($_REQUEST["num3"]);
            if (!is_int($num1) || !is_int($num2) || !is_int($num3)) {
                echo "<p>Introduce tres valores enteros</p>";
            } else {
                array_push($numeros, $num1, $num2, $num3);
                sort($numeros);
                echo "<p>Números ordenados de menor a mayor: ".$numeros[0]." > ".$numeros[1]." > ".$numeros[2]."</p>";
            }
        ?>
    </form>
</body>
</html>