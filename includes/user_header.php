<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="./assets/css/usuario.css">
<div class="row">
    <h4 class="identificacao">Bem vindo: <?= $_SESSION['nome'] ?></h4>
</div>
<div class="row">
    <div class="col d-flex justify-content-between">
        <div>
            <a href="./usuario.php" class="mx-1 btn btn-roxo select">Filmes</a>
            <a href="#" class="mx-1 btn btn-roxo">Cad. Filme</a>
            <a href="./usuario.php?tipo=usuario" class="mx-1 btn btn-roxo">Usuarios</a>
            <a href="#" class="mx-1 btn btn-roxo">Cad. Usuario</a>
            <a href="#" class="mx-1 btn btn-roxo">Config</a>
        </div>
        <a href="./usuario.php?sair=true" class="btn btn-roxo">Sair</a>
    </div>
</div>