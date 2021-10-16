<?php include __DIR__ . '/../layouts/header.php' ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Navbar</a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="<?= URLBASE ?>/pages/home"> Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= URLBASE ?>/cliente/login"> Entrar</a>
            </li>
        </ul>
        <a class="btn btn-outline-success my-2 my-sm-0" href="<?= URLBASE ?>/cliente/cadastro">Cadastrar-se</a>
    </div>
</nav>

<?php include __DIR__ . '/../layouts/footer.php' ?>
