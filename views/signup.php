<?php include HTML_HEADER ?>

<form action="" method="post">
    <div class="login">
        <div class="wrapper wrapper-login">
            <div class="container container-signup animated fadeIn">
                <h3 class="text-center">Cadastrar-se</h3>
                <div class="login-form">
                    <div class="form-group">
                        <label for="nomecompleto" class="placeholder"><b>Nome Completo</b></label>
                        <input type="text" name="nomecompleto" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="placeholder"><b>Email</b></label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="passwordsignin" class="placeholder"><b>Senha</b></label>
                        <div class="position-relative">
                            <input type="password" name="senhacadastro" class="form-control" required>
                            <div class="show-password">
                                <i class="flaticon-interface"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="confirmasenha" class="placeholder"><b>Confirmar Senha</b></label>
                        <div class="position-relative">
                            <input type="password" name="confirmarsenha" class="form-control" required>
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
                            <a href="<?= URLBASE ?>/account/signin" id="show-signin" class="btn btn-danger btn-link w-100 fw-bold">Desistir</a>
                        </div>
                        <div class="col-md-6">
                            <input type="submit" class="btn btn-primary w-100 fw-bold" value="Cadastrar-se">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<?php include HTML_FOOTER ?>
