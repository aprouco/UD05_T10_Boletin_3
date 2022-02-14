<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio7</title>
</head>
<body>
    <form action="ejercicio8.html.php">
        <p>Introduce una nota: <input type="text" name="nota1"><em> La nota debe ser entre 0 y 10</em></p>
        <p>Introduce una nota: <input type="text" name="nota2"><em> La nota debe ser entre 0 y 10</em></p>
        <p>Introduce una nota: <input type="text" name="nota3"><em> La nota debe ser entre 0 y 10</em></p>
        <p><input type="submit" value="submit"></p>
    </form>
    <p>
        <?php 
            $nota1=isset($_REQUEST["nota1"])?$_REQUEST["nota1"]:0;
            $nota2=isset($_REQUEST["nota2"])?$_REQUEST["nota2"]:0;
            $nota3=isset($_REQUEST["nota3"])?$_REQUEST["nota3"]:0;
            $media=(($nota1 + $nota2 + $nota3)/3);   
        
            if ($nota1 > 10 || $nota2 > 10 || $nota3 > 10) {
                echo "Error. Debe introducir una nota del 0 al 10";
            }
            if ($media < 5 ) {
                echo "La nota es <b>Insuficiente</b>";
            }elseif ($media >= 5 && $media < 6 ) {
                echo "La nota es <b>Suficiente</b>";
            }elseif ($media >= 6 && $media < 7 ) {
                echo "La nota es <b>Bien</b>";
            }elseif ($media >= 7 && $media < 9 ) {
                echo "La nota es <b>Notable</b>";
            }elseif ($media >= 9 && $media <= 10) {
                echo "La nota es <b>Sobresaliente</b>";
            }
            
        ?>
    </p>
</body>
</html>