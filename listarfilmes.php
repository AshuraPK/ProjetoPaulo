<?php 
require './classes/Filmes.php';
require'./classes/Generos.php';
//require é uma requisição de importancia, mais importante que meu include  

$titulo = '';
include'./includes/header.php';

$filme = new Filmes ();
$dadosFilmes = $filme->exibirListaFilmes();

$bob = new Generos();
$dadosGeneros = $bob->consultarListaGeneros();

include'./includes/filmes_filtro.php';
include'./includes/footer.php';

?>