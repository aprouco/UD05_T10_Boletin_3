<?php

header('Content-Type: text/html; charset=UTF-8');

$hora=$_REQUEST["hora"];

if ($hora>=6 && $hora<=12) {
    echo "Buenos días";
}elseif($hora>=13 && $hora<=20) {
    echo "Buenas tardes";
}else {
    echo "Buenas noches";
}
?>