<?php
$vetor[] = "";
$vezes = 0;
for ($i = 0; $i <= 30; $i++) {
    $vetor[$i] = rand(1, 15);
}
print "Digite um numero: ";
$numeroDigitado = (int) fgets(STDIN);
for ($a = 0; $a <= 30; $a++) {
    if ($vetor[$a] == $numeroDigitado) {
        $vezes = $vezes + 1;
        echo "O numero " . $numeroDigitado . " esta na posição " . $a . " do vetor \n";
    }
}
echo "Este numero se repete " . $vezes;
