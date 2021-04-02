<?php
$notas[] = "";
for($i=1; $i <= 4; $i++){
    print "Digite a nota";
    $notas[$i] = (double) fgets(STDIN);
}

$media = ($notas[1] + $notas[2] + $notas[3] + $notas[4]) / 4;


print "Primeira nota: $notas[1] \n";
print "Segunda nota: $notas[2] \n";
print "Terceira nota: $notas[3] \n";
print "Quarta nota: $notas[4] \n";
print "Média: $media \n";