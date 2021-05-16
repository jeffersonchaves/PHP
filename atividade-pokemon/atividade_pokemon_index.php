<?php

const URL = "https://pokeapi.co/api/v2/pokemon/"; #2
$pokemons = [];

for ($i = 16; $i <= 30; $i++) {

    $Id_Pokemon = $i;
    $url = URL . $Id_Pokemon;

    $consultUrl = file_get_contents($url);
    $pokemonMatriz = json_decode($consultUrl, true);

    $pokemons[$i]['nome'] = $pokemonMatriz['forms'][0]['name'];
    $pokemons[$i]['altura'] = $pokemonMatriz['height'];
    $pokemons[$i]['peso'] = $pokemonMatriz['weight'];
    $pokemons[$i]['habilidade'] = $pokemonMatriz['abilities'];
    $pokemons[$i]['imagem'] = $pokemonMatriz['sprites']['other']['dream_world']['front_default'];
}
// echo "<pre>";
// print_r($pokemons);
// echo "</pre>";
// exit;

include "atividade_pokemon.php";
