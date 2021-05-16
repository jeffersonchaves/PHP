<?php
error_reporting(0);

$letra = $_GET['letra'];
$mes = $_GET['mes'];
$dia = $_GET['dia'];

$vetor1 = [
    "a" => "água com limão", 
    "b" =>"Bacon", 
    "c" =>"Cúrcuma", 
    "d" =>"Doce de leite",
    "e" =>"Azeite",
    "f" =>"Frango",
    "g" =>"Gengibre",
    "h" =>"Adoçante",
    "i" =>"Açucar",
    "j" =>"Jiló",
    "k" =>"Comida Japonesa",
    "l" =>"Leite",
    "m" =>"Macarrão",
    "n" =>"Nata",
    "o" =>"Ovo",
    "p" =>"Pizza",
    "q" =>"Óleo de cooc",
    "r" =>"Rabanada",
    "s" =>"Suco detox",
    "t" =>"Sal rosa",
    "u" =>"Glutamina",
    "v" =>"Jiló",
    "w" =>"Peixe",
    "x" =>"Própolis",
    "y" =>"Kumbucha",
    "z" =>"Peixe",
    
];

$vetor2 = [
    "janeiro"=>"ao acordar",
    "fevereiro"=> "pré-treino",
    "março"=>"amassado com limão",
    "abril"=>"no cabelo",
    "maio"=>"em Jejum",
    "junho"=>"de 3 em 3 horas",
    "julho"=>"no chá",
    "agosto"=>"no café",
    "setembro"=>"Depois das 18h00",
    "outubro"=>"antes da aula",
    "novembro"=>"misturado na àgua",
    "dezembro"=>"antes do almoço"
];

$vetor3 = [
    "diminiu o inchaço",
    "previne infarto",
    "cura dor de dente",
    "limpa o fígado",
    "deixa mais inteligente",
    "limpa as artérias",
    "deixa musculos@",
    "fortalece a unha",
    "mata",
    "dá sorte",
    "da azar",
    "limpa espinhas",
    "faz perder peso mais rapido",
    "faz os dentes ficarem mais branco",
    "cura a gripe",
    "cura o cancer",
    "alivia os sintomas da Covid",
    "comer X-egg faz bem para o coração",
    "dimunui o colesterol",
    "aumenta o QI",
    "faz bem para a saúde",
    "aumenta a nivel de massa magra no corpo",
    "faz o cabelo crescer mais rapido",
    "previni unha encravada",
    "faz ficar mais alto",
    "limpa a gordura no sangue",
    "te torna imune a dengue",
    "dimunui o risco de infarto",
    "faz a barba crescer mais cheia",
    "deixa a pele mais bonita"
];

require 'gerador_frases.view.php';