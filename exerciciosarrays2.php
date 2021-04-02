<?php
$numeros[] = "";

for ($i = 0; $i <= 9; $i++) {
    print "digite um número: ";
    $numeros[$i] = (int) fgets(STDIN);
}

$numeros = array_reverse($numeros);
print_r($numeros);