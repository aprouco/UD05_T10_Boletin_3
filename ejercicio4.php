<?php

header('Content-Type: text/html; charset=UTF-8');

$horastrabajadas=$_REQUEST["horastrabajadas"];
if ($horastrabajadas <= '40' ) {
    $salariosemanal= ($horastrabajadas * 12);
    echo "El salario es de ".$salariosemanal."€";
}else {
    $salariosemanal= (($horastrabajadas - 40) * 16);
    echo "El salario es de ".$salariosemanal."€";
}

?>