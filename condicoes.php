<?php

include_once 'condicaoHtml.php';

$v1 =  $_GET['v1'];
$v2 =  $_GET['v2'];
$calc = $_GET['operarcao'];


if($calc == 'sm'){
    $calculo = $v1 + $v2;
    echo "A soma é igual a: $calculo";
}elseif($calc == 'sbt'){
    $calculo = $v1 - $v2;
    echo "A subtrçao é igual a: $calculo";
}elseif($calc == 'mtp') {
    $calculo = $v1 * $v2;
    echo "A Multiplicaçao é igual a: $calculo";
}elseif($calc == 'dv') {
    $calculo = $v1 / $v2;
    echo "A Divisao é igual a: $calculo";
}
