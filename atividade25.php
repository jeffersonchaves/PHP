<?php
$numero = 8;
$num = 0;
    for($a = 1; $a <= $numero; $a++){
        if($a% 2 == 0){
            $num = $a * (-1);
            echo $num. " ";
        }
        else 
        echo $a. " ";
    }
?>