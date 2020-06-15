<?php
//Atividade 5)A)
$data = date('d-m-Y');
echo "Data: ".$data;
/*Resultado: Data: 15-06-2020*/
?><br><br>

<?php
//B
$msg = "Olá, mundo!";;
echo lcfirst($msg)."<br>";
echo ucfirst($msg)."<br>";
echo ucwords($msg)."<br>";
echo strtolower($msg)."<br>";
echo strtoupper($msg)."<br>";
/*Resultado: olá, mundo!
             Olá, mundo!
             Olá, Mundo!
             olá, mundo!
             OLá, MUNDO!*/
?><br><br>

<?php
//B
$msg = "   Cheio  de  espaços   ";;
echo ltrim($msg)."<br>";
echo rtrim($msg)."<br>";
echo trim($msg)."<br>";
/*Resultado: olá, mundo!
             Olá, mundo!
             Olá, Mundo!
             olá, mundo!
             OLá, MUNDO!*/
?><br><br>