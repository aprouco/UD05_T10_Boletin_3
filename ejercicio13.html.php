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
            $numeros = array($_POST["num1"],$_POST["num2"],$_POST["num3"]);
            asort($numeros, 1);
            for($x = 0; $x < count($numeros); $x++) {
            echo $numeros[$x];
            }
        ?>
    </form>
</body>
</html>