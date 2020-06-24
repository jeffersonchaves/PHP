<?php

    $gera = rand(1,14);
    if($gera%3 == 0 ){
        echo $gera." é um número multiplo de 3<br>";
    }elseif($gera%5 == 0){
        echo $gera." é um número multiplo de 5<br>";
    }else{
        echo $gera." não é um número multiplo nem de 3 e nem de 5<br>";
    }
?>