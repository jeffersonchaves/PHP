<?php
//Atividade 10)A)
$nome = "Ana";
if($nome == "Ana"){
    echo "O nome é Ana";
}
//Resultado: O nome é Ana
?><br><br>

<?php
//B)
$nome = "Anna";
if($nome == "Ana"){
    echo "O nome é Ana";
}
else{
    echo "O nome não é Ana";
}
//Resultado: O nome não é Ana
?><br><br>

<?php
//C)
$num = rand();
$num *= 4;
if($num%2 == 0){
    echo "O número é par";
}
else{
    echo "O número é impar";
}
//Resultado: O número é par
?><br><br>

<?php
//D)
$idade = 22;
$sexo = "f";
if($idade < 15 && $sexo == "f"){
    echo "É uma menina";
}
else{
    if($sexo == "m")
    echo "É um homen";
    else
    echo "É uma mulher";
    echo " e tem ".$idade." anos";
}
//Resultado: É uma mulher e tem 22 anos
?><br><br>

<?php
//E)
$a = 10;
$b = 3;
$c = true;
$d = "PHP";
if($a > $b || $c){
    echo "Mensagem 1<br>";
        if($a == $b*3+$c)
            echo "Mensagem 2<br>";
                if($c && $d)
                    echo "Mensagem 3";

}
/*Resultado: Mensagem 1
             Mensagem 2
             Mensagem 3*/
?><br><br>

<?php
//F
$idade = 30;
if($idade < 10){
    echo "Criança";
}
elseif($idade < 20){
    echo "Jovem";
}
elseif($idade < 60){
    echo "Adulto";
}
else{
    echo "Idoso";
} 
//Resultado: Adulto
?><br><br>

<?php
//G
$bolo = "chocolate";
switch ($bolo){
    case "chocolate";
        echo "Bolo de Chocolate";
    break;
    case "baunilha";
        echo "Bolo de Baunilha";
    break;
    case "limao";
        echo "Bolo de Limão";
    break;
//Resultado: Bolo de Chocolate
}

<?php
//H
$bolo = "chocolate";
switch ($bolo){
    case "chocolate";
        echo "Bolo de Chocolate";
    case "baunilha";
        echo "Bolo de Baunilha";
    break;
    case "limao";
        echo "Bolo de Limão";
    break;
//Resultado: Bolo de ChocolateBolo de Baunilha
}
?><br><br>
