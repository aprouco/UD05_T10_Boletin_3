<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio17</title>
</head>
<body>
    <form action="ejercicio18.html.php">
        <p>Introduce un número: <input type="text" name="num"></p>
        <input type="submit" value="Enviar">
        <br>
        <p>
            <?php 
                $num=$_REQUEST["num"];
                $dig=str_split(abs($num));
                if (strlen(abs($num)) <=5) {
                    echo "El número de cifras es ".strlen($num);
                }else{
                    echo "El número de cifras debe ser menor o igual a 5";
                }
            ?>
        </p>
    </form>
</body>
</html>