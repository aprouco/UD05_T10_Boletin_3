<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3</title>
</head>
<body>
    <form action="ejercicio3.html.php">
        <label for="dia">Elige una opción: </label>
        <select name="dia">
            <option value="">Escoge una opción</option>
            <option value="1">Dia 1</option>
            <option value="2">Dia 2</option>
            <option value="3">Dia 3</option>
            <option value="4">Dia 4</option>
            <option value="5">Dia 5</option>
            <option value="6">Dia 6</option>
            <option value="7">Dia 7</option>
            

        </select>
        <input type="submit" value="submit">

        <?php 
            if (isset($_REQUEST["dia"]) && ($_REQUEST["dia"]==1)){
                echo '<p>O día 1 equivale ao <b>Luns</b></p>' ;
            }
            ?>

            <?php 
            if (isset($_REQUEST["dia"]) && ($_REQUEST["dia"]==2)){
                echo '<p>O día 2 equivale ao <b>Martes</b></p>' ;
            }
            ?>

            <?php 
            if (isset($_REQUEST["dia"]) && ($_REQUEST["dia"]==3)){
                echo '<p>O día 3 equivale ao <b>Mércores</b></p>';
            }
            ?>

            <?php 
            if (isset($_REQUEST["dia"]) && ($_REQUEST["dia"]==4)){
                echo '<p>O día 4 equivale ao <b>Xoves</b></p>' ;
            }
            ?>

            <?php 
            if (isset($_REQUEST["dia"]) && ($_REQUEST["dia"]==5)){
                echo '<p>O día 5 equivale ao <b>Venres</b></p>' ;
            }
            ?>

            <?php 
            if (isset($_REQUEST["dia"]) && ($_REQUEST["dia"]==6)){
                echo '<p>O día 6 equivale ao <b>Sábado</b></p>' ;
            }
            ?>

            <?php 
            if (isset($_REQUEST["dia"]) && ($_REQUEST["dia"]==7)){
                echo '<p>O día 7 equivale ao <b>Domingo</b></p>' ;
            }
            ?>
            
    </form>
</body>
</html>