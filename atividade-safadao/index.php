<?php
error_reporting(0);
ini_set("display_errors", 0 );

    $diastring = $_GET['dia'];
    $messtring = $_GET['mes'];
    $anostring = $_GET['ano'];

    $dia = (int)$diastring;
    $mes = (int)$messtring;
    $ano = (int)$anostring;
    
    function somatorio($mes){
        $valor = $mes;
        $array[] = 0;

        for ($i = 0; $i < $valor; $i++) { 
            $array[$i] = $mes;
            $mes--;
        }
        return array_sum($array);
    }

    function safadeza($dia, $mes, $ano){
        $valordia = 50 - $dia;
        $valorano = $ano / 100;
        
        $safadao = $valordia + somatorio($mes) + $valorano;
        $anjo = 100 - $safadao;

        echo "<p>Sua porcentagem de não anjo é: ".$safadao."</p>";
        echo "<p>Sua porcentagem de anjo é: ".$anjo."</p>";
    }

    
    require "safadao.view.php";