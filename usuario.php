<?php
require './classes/Filmes.php';
include './includes/header.php';



if (!empty($_GET) && $_GET['sair'] == 'true') {
    session_destroy();
    header ('location:index.php');
}

if (empty($_SESSION['id_pessoa']) && !isset($_SESSION['id_pessoa']) ) {
    header ('location:usuario-login.php');

}

$filme = New Filmes();
$resultadoConsultaFilmes = $filme->exibirListaFilmes();
?>
<section id="usuario-principal">
    <main class="container usuario-principal">
        <?php
        include_once './includes/user_header.php';
        include_once './includes/user_lista_filmes.php';

        ?>
    </main>
</section>



<?php

include './includes/footer.php';
