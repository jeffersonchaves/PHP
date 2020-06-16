<?php
//Atividade 7
$timestamp = mktime(0,0,0, 3, 4, 2016);
$timestamp1 = mktime(0,0,0, 2, 28, 2016);

$dias = $timestamp - $timestamp1;
$diferença = $dias/(60*60*24);
echo "Diferença de ".$diferença." dias";
/*Resultado: Diferença de 5 dias*/
?><br><br>