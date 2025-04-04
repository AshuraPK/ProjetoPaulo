<?php
require './classes/Filmes.php';
require './classes/Generos.php';

$titulo = 'CineBox - Início';
include './includes/header.php';
include './includes/banner.php';

$filmes = new Filmes();
$dadosFilmes = $filmes -> exibirListarFilmes(24);

$genero = new Generos();

include './includes/filme_lista.php';

include './includes/footer.php';