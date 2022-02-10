<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio5</title>
</head>
<body>
    <form action="ejercicio5.html.php">
        <p>Introduce el valor de <b>a</b>: <input type="text" name="a"></p>
        <p>Introduce el valor de <b>b</b>: <input type="text" name="b"></p>
        <input type="submit" value="submit">
    </form>
    <?php 

        $a=isset($_REQUEST["a"])?$_REQUEST["a"]:0;
        $b=isset($_REQUEST["b"])?$_REQUEST["b"]:0;

        if ($a==0) {
            echo "El valor de a no es válido. Introduce otro valor";
        }else{
            $resultado=(-$b / $a );
            echo "x = ".$resultado;
        }
    
    ?>
</body>
</html>