<?php 

header('Content-Type: text/html; charset=UTF-8');

$a=isset($_REQUEST["a"])?$_REQUEST["a"]:0;
$b=isset($_REQUEST["b"])?$_REQUEST["b"]:0;

if ($a==0) {
    echo "El valor de a no es válido. Introduce otro valor";
}else{
    $resultado=(-$b / $a );
    echo "x = ".$resultado;
}

?>