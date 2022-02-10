<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4</title>
</head>
<body>
    <form action="ejercicio4.html.php">
        <p>Introduce el número de horas trabajadas: <input type="text" name="horastrabajadas"></p>
        <input type="submit" value="submit">
    </form>
    <?php
        /*$horastrabajadas;
        if(isset($_REQUEST['horastrabajadas'])){
            $horastrabajadas = $_REQUEST['horastrabajadas'];
        }else{
            $horastrabajadas=0;
        }*/
        #Linea siguiente = a linea 15-20
        $horastrabajadas=isset($_REQUEST["horastrabajadas"])?$_REQUEST["horastrabajadas"]:0;
        $salario = 0;
        if ($horastrabajadas <= '40' ) {
                $salario= ($horastrabajadas * 12);               
        }else{
                $salario= (($horastrabajadas - 40) * 16) + 40 *12 ;
        }
        if($salario==0){
            echo "<p>Indica cantas horas traballaches.</p>";
        }else{
            echo "El salario semanal es de ".$salario."€";
        }
?>
</body>
</html>