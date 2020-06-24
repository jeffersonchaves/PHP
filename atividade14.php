<?php

    $gera = rand(1,20);
    if($gera%3 == 0 ){
        echo $gera." é um número multiplo de 3<br>";
    }else{
        echo $gera." não é um número multiplo de 3<br>";
    }
?>