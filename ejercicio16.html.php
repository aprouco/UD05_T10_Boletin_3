<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio16</title>
</head>
<body>
    <form action="ejercicio16.html.php">
        <p>Introduce un número: <input type="text" name="num"></p>
        <input type="submit" value="Enviar">
        <br>
        <p>
            <?php 
                $num=intval($_REQUEST["num"]);
                $dig=str_split($num);
                echo end($dig);
            ?>
        </p>
    </form>
</body>
</html>