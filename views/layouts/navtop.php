<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?= URLBASE ?>/pages/home">GYMWEB</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?= URLBASE ?>/pages/home">HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a href="<?= URLBASE ?>/account/signin" class="nav-link">ESPAÇO DO CLIENTE <i class="fas fa-lock"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= URLBASE ?>/pages/sobre">SOBRE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= URLBASE ?>/pages/contato">CONTATO</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    FERRAMENTAS
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
        <form action="<?= URLBASE ?>/account/signup" method="post" class="form-inline my-2 my-lg-0">
            <button type="submit" class="btn btn-outline-warning my-2 my-sm-0">Cadastrar-se</button>
        </form>
    </div>
</nav>
