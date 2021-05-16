<?php
error_reporting(0);

global $mes;
$dia = $_GET['dia'];
$mes = $_GET['mes'];
$ano = $_GET['ano'];
$GLOBALS ['mes'];
$safadeza = 0;
$somatorio = 0;
$anjo = 0;


$safadeza = somatorio($mes) + ($ano / 100) * (50 - $dia);
$anjo = 100 - $safadeza;

function somatorio(){
    for ($i = $GLOBALS ['mes']; $i >= 0; $i--) {
        $somatorio = $GLOBALS ['somatorio'] + $i;
    }
    return $somatorio;
  }
  


require 'safadao.view.php';
