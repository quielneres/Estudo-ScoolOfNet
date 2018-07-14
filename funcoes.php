<?php

function calculator($v1, $v2, $op)
{
    if($op = "+"){
        $result = $v1 + $v2;

        echo $result;
    }elseif ($op = "-") {
        $result = $v1 - $v2;

        echo $result;
    }elseif ($op = "/") {
        $result = $v1 / $v2;

        echo $result;
    }elseif ($op = "*") {
        $result = $v1 * $v2;

        echo $result;
    }

    
}