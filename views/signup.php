<?php include HTML_HEADER ?>

<form action="<?= URLBASE ?>/account/signup" method="post">
    <div class="login">
        <div class="wrapper wrapper-login">
            <div class="container container-signup animated fadeIn">
                <h3 class="text-center">Cadastrar-se</h3>
                <div class="login-form">
                    <div class="form-group">
                        <label for="nomeCompleto" class="placeholder"><b>Nome Completo</b></label>
                        <input type="text" name="nomeCompleto" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="emailCadastro" class="placeholder"><b>Email</b></label>
                        <input type="email" name="emailCadastro" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="passwordsignin" class="placeholder"><b>Senha</b></label>
                        <div class="position-relative">
                            <input type="password" name="senhaCadastro" class="form-control">
                            <div class="show-password">
                                <i class="flaticon-interface"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="confirmarSenha" class="placeholder"><b>Confirmar Senha</b></label>
                        <div class="position-relative">
                            <input type="password" name="confirmarSenha" class="form-control">
                            <div class="show-password">
                                <i class="flaticon-interface"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row form-sub m-0">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="concordo" class="custom-control-input" id="agree">
                            <label for="agree" class="custom-control-label">Eu concordo em aceitar os termos de uso.</label>
                        </div>
                    </div>
                    <div class="row form-action">
                        <div class="col-md-6">
                            <a href="<?= URLBASE ?>/pages/home" id="show-signin" class="btn btn-danger btn-link w-100 fw-bold">Desistir</a>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-primary w-100 fw-bold">Cadastrar-se</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<?php include HTML_FOOTER ?>
