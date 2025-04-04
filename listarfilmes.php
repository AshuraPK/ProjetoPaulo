<?php
require './classes/Filmes.php';
require './classes/Generos.php';

$titulo = 'CineBox - Filmes';
include './includes/header.php';

$filme = new Filmes();
$dadosFilmes = $filme->exibirListarFilmes();

$genero = new Generos();
$dadosGeneros = $genero->consultarListaGeneros();

include './includes/filmes_filtro.php';
include './includes/footer.php';