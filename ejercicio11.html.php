<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio11</title>
</head>
<body>
    <form action="ejercicio11.html.php">
        <p>Introduce la hora: <input type="text" name="hora"></p>
        <p>Introduce los minutos: <input type="text" name="minutos"></p>
        <input type="submit" value="Calcular">
        <?php 
            $hora=isset($_REQUEST["hora"])?intval($_REQUEST["hora"]):0;
            $minutos=isset($_REQUEST["minutos"])?intval($_REQUEST["minutos"]):0;
            $minutos_totales= 24 * 3600;
            if ($hora >= 0 && $hora <= 24 ) {
                $segundos_hora = $hora * 3600;    
            }
            if ($minutos >= 0 && $minutos <= 59 ) {
                $segundos_minutos = $minutos * 60;
            }
            $segundos_restantes = $minutos_totales - ($segundos_hora + $segundos_minutos);
            echo "Los segundos restantes hasta media noche son ".abs($segundos_restantes);
        ?>
    </form>
</body>
</html>