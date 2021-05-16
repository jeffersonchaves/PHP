<?php
error_reporting(0);

const ID = "syCLIh69u1hS9oFjxToVb";
const SECRET = "C0rCUBdNQywjNLv39YnhdDHy7jjOSuiVpsX2sxLz";

const BASE_URL = "https://api.aerisapi.com/conditions/";

$cidade = $_GET['campo_cidade'];
$cidade = urlencode($cidade);

$url = BASE_URL . "{$cidade},br?client_id=" . ID . "&client_secret=" . SECRET;

$json  = file_get_contents($url);
$dados = json_decode($json, true);

$nome = $dados['response'][0]['place']['name'];
$temperatura = $dados['response'][0]['periods'][0]['tempC'];
$sensacao = $dados['response'][0]['periods'][0]['feelslikeC'];
$umidade = $dados['response'][0]['periods'][0]['humidity'];
$velocidade = $dados['response'][0]['periods'][0]['windSpeedKPH'];

include "clima_view.php";
?>