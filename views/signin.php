<?php include HTML_HEADER ?>

<form action="" method="post">
    <div class="login">
        <div class="wrapper wrapper-login">
            <div class="container container-login animated fadeIn">
                <h3 class="text-center">Acessar o Sistema</h3>
                <div class="login-form">
                    <div class="form-group">
                        <label for="email" class="placeholder"><b>Email</b></label>
                        <input type="email" name="emaillogin" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="senha" class="placeholder"><b>Senha</b></label>
                        <a href="#" class="link float-right">Esqueci minha senha</a>
                        <div class="position-relative">
                            <input type="password" name="senha" class="form-control" required>
                            <div class="show-password">
                                <i class="flaticon-interface"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-action-d-flex mb-3">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" id="rememberme" class="custom-control-input">
                            <label for="rememberme" class="custom-control-label m-0">Lembrar Login</label>
                        </div>
                        <input type="submit" class="btn btn-primary col-md-5 float-right mt-3 mt-sm-0 fw-bold" value="Entrar">
                    </div>
                    <div class="login-account">
                        <span class="msg">Ainda não tem uma conta?</span>
                        <a href="<?= URLBASE ?>/account/signup" id="show-signup" class="link">Cadastrar-se</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<?php include HTML_FOOTER ?>
