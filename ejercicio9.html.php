<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio9</title>
</head>
<body>
    <form action="ejercicio9.html.php">
        <p>Introduce el valor de a: <input type="text" name="a"></p>
        <p>Introduce el valor de b: <input type="text" name="b"></p>
        <p>Introduce el valor de c: <input type="text" name="c"></p>
        <input type="submit" value="submit">
    </form>
    <p>
        <?php 

            $a=isset($_REQUEST["a"])?$_REQUEST["a"]:0;
            $b=isset($_REQUEST["b"])?$_REQUEST["b"]:0;
            $c=isset($_REQUEST["c"])?$_REQUEST["c"]:0; 

            $neg = -1; 

            $menosb = $b * $neg; 
            $oper1 = pow($b,2); 
            $oper2 = 4*$a*$c; 
            $resta = $oper1-$oper2; 
            $raiz = pow($resta,(1/2)); 
            $dosXa = 2*$a; 

            $result1 = ($menosb + $raiz) / $dosXa; 
            $result2 = ($menosb - $raiz) / $dosXa; 

            echo"X<sub>1</sub> = $result1<br>"; 
            echo"X<sub>2</sub> = $result2"; 
        ?>
    </p>
</body>
</html>