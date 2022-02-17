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
                if (!isset($_POST["num"])) {
                    echo "<p>Tes que introducir un número.</p>";
                }else if (filter_var($_POST['num'],FILTER_VALIDATE_INT)){
                    echo "<p>Tes que introducir un número.</p>";
                }else{

                }



                $num=intval($_REQUEST["num"]);
                $dig=str_split($num);
                echo end($dig);
                
            ?>
        </p>
    </form>
</body>
</html>