<?php
//Atividade 18)A)
for($i=1; $i <=5; $i++){
    echo $i." ";
}
//Resultado: 1 2 3 4 5
?><br><br>

<?php
//B)
$i =2;
while($i <= 10){
    echo $i." ";
    $i+=2;
}
//Resultado: 2 4 6 8 10
?><br><br>

<?php
//C)
$i =2;
do{
    echo $i." ";
    $i+=2;
}while($i<=10);
//Resultado: 2 4 6 8 10
?><br><br>

<?php
//D)
$a = true;
$b = -2;
$c = 7;
for(;$b < $c || $a; $b++){
    if($c + $b * 2> 20)
        $a = false;
        echo $b." ";
}
//Resultado: -2 -1 0 1 2 3 4 5 6 7
?><br><br>

<?php
//D)
$a = true;
$b = -2;
$c = 6;
for(;$b < $c || $a; $b++){
    if($c + $b * 2> 20)
        $a = false;
        echo $b." ";
}
//Resultado: -2 -1 0 1 2 3 4 5 6 7 8
?><br><br>

<?php
//F)
$num = 5;
$res = 1;
do {
    $res *= $num--;
}while($num > 1);
    echo $res;
//Resultado: 120
?><br><br>

<?php
//G
$num = 4;
$res = 1;
do{
    $res *= $num--;
}while ($num > 1);
echo $res;
//resultado: 24
?><br><br>

<?php
//H
$num = 3;
do{
    if($num % 3 == 1)
        echo $num." ";
}while (++$num<20);
//resultado: 4 7 10 13 16 19
?><br><br>

<?php
//I
$a = 0;
while(++$a <=  4){
    for($i = 1; $i <= $a; $i++)
        echo $i." ";
        echo"<br>";
}
/*resultado: 1
             1 2
             1 2 3
             1 2 3 4*/
?><br><br>

<?php
//J
$a = 0;
while(++$a <=  5){
    for($i = 1; $i <= $a; $i++)
        echo $i." ";
        echo"<br>";
}
/*resultado: 1
             1 2
             1 2 3
             1 2 3 4
             1 2 3 4 5*/
?><br><br>

