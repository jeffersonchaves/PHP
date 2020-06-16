
<?php
//Atividade 1
$_nome;
$valor;
$sid;
$abc;
$z99;
$soma;
$files;
$abcdefghijklmnopqrstuvwxyz; //não entra como variável por ter a clareza do código fonte.  
?><br><br>

///////////////////////////////////////

<?php 
//Atividade 2)A);
echo "Olá";
//Resultado: Olá
?><br><br>


<?php 
//B)
echo "Olá";
echo "Pessoal";
//Resultado: OláPessoal
?><br><br>


<?php 
//C)
echo "Olá<br>";
echo "Pessoal";
/*Resultado: Olá
             Pessoal*/
?><br><br>

<?php 
//D)
echo "Olá<br>Pessoal";
/*Resultado: Olá
             Pessoal*/
?><br><br>

<?php 
//E)
$nome = "Jandira";
echo "Olá<br>";
echo $nome;
/*Resultado: Olá
             Jandira*/
?><br><br>

<?php 
//F)
$nome = "Jandira";
$sobrenome = "Ferreira";
echo "Olá<br>".$nome.$sobrenome;
/*Resultado: Olá
             JandiraFerreira*/
?><br><br>

<?php 
//G)
$num = 4;
echo $num;
echo "<br>";
echo $num.$num;
/*Resultado: 4
             44*/
?><br><br>

////////////////////////////////

<?php 
//Atividade 3)A)
$x = 1;
$x = -$x;
$y = -$x;
echo $x."<br>".$y;
/*Resultado: -1
              1 */
?><br><br>

<?php 
//B
$a = 13;
$b = $a%4;
$c = $b/5;
$d = (int)($b/5);
echo $b."<br>".$c."<br>".$d;
/*Resultado: 1
             0.2
             0 */
?><br><br>

<?php
// C
$x = 10;
$x /= 4;
echo $x."<br>";
echo floor($x)."<br>";
echo ceil($x)."<br>";
/*Resultado: 2.5
             2
             3 */
?><br><br>

<?php
// D
echo round(3.4)."<br>";
echo round(3.5)."<br>";
echo round(3.6)."<br>";
echo round(5.045,2)."<br>";
echo round(5.055,2)."<br>";
/*Resultado: 3
             4
             4 
             5.05
             5.06*/

?><br><br>

<?php
// E
$x = -10;
$y =10;
echo abs($x)."<br>".abs($y);
/*Resultado: 10
             10*/

?><br><br>

<?php
// F
$n = 2;
$x = 3;
$p = pow($n, $x);
echo $p."<br>";
$r = 9;
echo sqrt($r);
/*Resultado: 8
             3*/

?><br><br>

<?php
// G
$min = 1;
$max = 10;
echo rand($min, $max);
/*Resultado: 4*/
?><br><br>

<?php
// H
$a = 5;
echo $a++."<br>";
echo $a."<br>";

$a = 5;
echo ++$a."<br>";
echo $a."<br>";

$a = 5;
echo $a--."<br>";
echo $a."<br>";

$a = 5;
echo --$a."<br>";
echo $a."<br>";
/*Resultado: 5
             6
             6
             6
             5
             4
             4
             4*/

?><br><br>

////////////////////////////////////

<?php
//Atividade 4)A)
$x = "10";
$y = 10;
echo ($x == $y)."<br>";
echo ($x ==+ $y)."<br>";
echo ($x != $y)."<br>";
echo ($x !== $y);
/*Resultado: 1
             1
            
             1 */ 
?><br><br>

<?php
//B
$x = 15;
$y = 10;
echo ($x > $y)."<br>";
echo ($x < $y)."<br>";
echo ($x >= $y)."<br>";
echo ($x <= $y);
/*Resultado: 
            1
            
            1*/
?><br><br>

<?php
//C
$a = true;
$b = false;
echo ($a && $b)."<br>";
echo ($a || $b)."<br>";
echo (!$a);
/*Resultado: 

            1*/
?><br><br>

<?php
//D
$a = "Oie";
echo ($a && $b)."<br>";
echo ($a || $b)."<br>";
echo (!$a);
/*Resultado: 

            1*/
?>

//////////////////////////////////

<?php
//Atividade 5)A)
$data = date('d-m-Y');
echo "Data: ".$data;
/*Resultado: Data: 15-06-2020*/
?><br><br>

<?php
//B
$jan1 = mktime(0,0,0,1,31,2014);
$jan1_30 = mktime(0,30,0,1,31,2014);
$dif = $jan1_30 - $jan1;
echo $dif;
/*Resultado: 1800*/
?><br><br>

<?php
//C
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
//D
$msg = "   Cheio  de  espaços   ";
echo ltrim($msg)."<br>";
echo rtrim($msg)."<br>";
echo trim($msg)."<br>";
/*Resultado: Cheio de espaços
             Cheio de espaços
             Cheio de espaços*/
?><br><br>

<?php
//E
$busca = "nome";
$troca = "Marinalva";
$frase = "E ai, nome!";
$msg = str_replace($busca, $troca, $frase);
echo $msg;
/*Resultado: E ai, Marinalva!*/
?><br><br>

<?php
//F
$msg = "Oi, como foi seu dia?";
echo strlen($msg) ."<br>";
echo substr_count($msg, 'oi');
/*Resultado: 21
             1*/
?><br><br>

<?php
//G
$msg = "abcdefghijklmnopqrstuvwxyz";
echo substr($msg, 0, 1) ."<br>";
echo substr($msg, 3, 5) ."<br>";
echo substr($msg, 10, -2) ."<br>";
echo substr($msg, strlen($msg) -2, 1);
/*Resultado: a
             defgh
             klmnopqrstuvwx
             y*/
?><br><br>

///////////////////////////////////

<?php 
$n1 = 2;
$n2 = 5;
$n3 = 8;
$result = $n1 + $n2 + $n3;
$raiz = $result * $result;
echo "Soma dos três valores: ".$result."<br>";
echo "Raiz quardrada: ".$raiz; 
?><br><br>

//////////////////////////////////

<?php
//Atividade 7
$timestamp = mktime(0,0,0, 3, 4, 2016);
$timestamp1 = mktime(0,0,0, 2, 28, 2016);

$dias = $timestamp - $timestamp1;
$diferença = $dias/(60*60*24);
echo "Diferença de ".$diferença." dias";
/*Resultado: Diferença de 5 dias*/
?><br><br>

///////////////////////////////////////////

<?php
//
$mensagem = "Comentarios do Facebook não estão disponíveis no Google";
$palavra1 = "Google";
$palavra2= "Facebook";
$mensagem = str_replace($palavra2, $palavra1, $mensagem);
echo substr_replace($mensagem, $palavra2, -6);

?><br><br>

////////////////////////////////////////////////

<?php
//Atividade 9
$msg = "Palavra";
echo strrev($msg);
/*Resultado: arvalaP*/
?><br><br>
