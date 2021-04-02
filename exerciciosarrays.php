<?php
$numero = array();

    for ($i = 0; $i <=4 ; $i++) {
        print "digite um número: ";
        $numero[$i] = (int) fgets(STDIN);

}
print_r($numero);

?>