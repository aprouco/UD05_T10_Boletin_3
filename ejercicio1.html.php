<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletín03_T01</title>
</head>
<body>
    <form action="ejercicio1.php" method="post">
        <label for="dia">Escolle o día da semana</label>
        <select name="dia">
            <option value="0">Luns</option>
            <option value="1">Martes</option>
            <option value="2">Mércores</option>
            <option value="3">Xoves</option>
            <option value="4">Venres</option>
        </select>
        <br>
        <label for="hora">Escolle a hora de clase: </label>
        <select name="hora">
            <option value="">Escolle unha opción</option>
            <option>8:50 - 9:40</option>
            <option>9:40 - 10:30</option>
            <option>10:30 - 11:20</option>
            <option>12:00 - 12:50</option>
            <option>12:50 - 13:40</option>
            <option>13:40 - 14:30</option>
            <option>16:00 - 16:50</option>
            <option>16:50 - 17:40</option>
            <option>17:40 - 18:30</option>
        </select>
        <br>
        <input type="submit" value="Enviar"/>
    </form>
</body>
</html>



<?php

$horario = array (
    '8:50 - 9:40' => array('IAW','SAD','ASXBD','ASXBD','IAW'),
    '9:40 - 10:30' => array('IAW','SAD','EIE','ASXBD','SRI'),
    '10:30 - 11:20' => array('SRI','SAD','EIE','ASX','SRI'),
    '11:20 - 12:00' => array('Recreo'),
    '12:00 - 12:50' => array('SRI','ASO','ASO','IAW','SAD'),
    '12:50 - 13:40' => array('ASO','ASO','IAW','IAW','SAD'),
    '13:40 - 14:30' => array('ASXBD','ASO','IAW','SRI','SAD'),
    '14:30 - 16:00' => array('Mediodía'),
    '16:00 - 16:50' => array('','SRI','','ASO',''),
    '16:50 - 17:40' => array('','SRI','','ASO',''),
    '17:40 - 18:30' => array('','SRI','','ASO','')
);

$dia=isset($_REQUEST["dia"])?$_REQUEST ["dia"]:"";
$hora=isset($_REQUEST["hora"])?$_REQUEST ["hora"]:"";

if ($dia=="" || $hora=="") {
    echo "<p>Tes que escoller un día e a hora.</p>";
}else if ($dia<5 && $dia>=0 && $hora!="") {
    echo "<p>A hora escollida é $hora.</p>";
    echo "<p>O día escollido é $dia.</p>";
    $horarioDaHoraEscollida = $horario[$hora];
    echo "<p>Nese horario a clase é: ".$horarioDaHoraEscollida[$dia]."</p>";
}else {
    echo "<p>O formato da hora ou do día non é correcto.</p>";
}

?>