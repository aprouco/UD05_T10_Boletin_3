<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio19</title>
</head>
<body>
    <form action="ejercicio19.html.php">
        <p>Introduce un número: <input type="text" name="num"></p>
        <input type="submit" value="Enviar">
        <br>
        <p>
            <?php 
                $num=$_REQUEST["num"];
                $numrev=strrev($_REQUEST["num"]);
                $length=strlen(abs($num));
                if ($length <=5) {
                    if ($num == $numrev) {
                        echo "El número es capicúa";                
                    }else{
                        echo "El número no es capicúa";
                    }
                }else{
                    echo "El número de cifras debe ser menor o igual a 5";
                }
            ?>
        </p>
    </form>
</body>
</html>