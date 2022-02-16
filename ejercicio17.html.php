<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio17</title>
</head>
<body>
    <form action="ejercicio17.html.php">
        <p>Introduce un número: <input type="text" name="num"></p>
        <input type="submit" value="Enviar">
        <br>
        <p>
            <?php 
                $num=intval($_REQUEST["num"]);
                $dig=str_split($num);
                if (strlen($num) <=5) {
                    echo "La primera cifra del número es ".$dig[0];
                }else{
                    echo "El número de cifras debe ser menor o igual a 5";
                }
            ?>
        </p>
    </form>
</body>
</html>