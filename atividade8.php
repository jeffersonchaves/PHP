<?php
//
$mensagem = "Comentarios do Facebook não estão disponíveis no Google";
$palavra1 = "Google";
$palavra2= "Facebook";
$mensagem = str_replace($palavra2, $palavra1, $mensagem);
echo substr_replace($mensagem, $palavra2, -6);

?><br><br>




