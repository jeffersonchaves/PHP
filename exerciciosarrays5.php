<?php
$numero = array();

for ($i = 0; $i <= 9; $i++) {
    print "digite um número inteiro: ";
    $numero[$i] = (int) fgets(STDIN);
}

for ($a = 0; $a <= 9; $a++) {
    if ($numero[$a] % 2 == 0) {
        echo "Está na posição " . $a . " do array com o valor " . $numero[$a] . "\n";
    }
}
