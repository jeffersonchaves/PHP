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

