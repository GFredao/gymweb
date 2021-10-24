<?php include HTML_HEADER ?>

<div class="wrapper">
    <div class="main-header" data-background-color="purple">
        <!-- Logo Header -->
        <div class="logo-header">

            <a href="index.php" class="logo">
                <img src="../../assets/img/logoazzara.svg" alt="navbar brand" class="navbar-brand">
            </a>
            <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fa fa-bars"></i>
                </span>
            </button>
            <button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>
            <div class="navbar-minimize">
                <button class="btn btn-minimize btn-rounded">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
        </div>
        <!-- End Logo Header -->

        <!-- Navbar Header -->
        <nav class="navbar navbar-header navbar-expand-lg">

            <div class="container-fluid">
                <div class="collapse" id="search-nav">
                    <form class="navbar-left navbar-form nav-search mr-md-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button type="submit" class="btn btn-search pr-1">
                                    <i class="fa fa-search search-icon"></i>
                                </button>
                            </div>
                            <input type="text" placeholder="Search ..." class="form-control">
                        </div>
                    </form>
                </div>
                <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                    <li class="nav-item toggle-nav-search hidden-caret">
                        <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                            <i class="fa fa-search"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown hidden-caret">
                    </li>
                    <li class="nav-item dropdown hidden-caret">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                            <div class="avatar-sm">
                                <img src="../../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-user animated fadeIn">
                            <li>
                                <div class="user-box">
                                    <div class="avatar-lg"><img src="../../assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
                                    <div class="u-text">
                                        <h4>Nome Usuario</h4>
                                        <p class="text-muted">seuemail@example.com</p>
                                        <!--<a href="userprofile.php" class="btn btn-rounded btn-danger btn-sm">Meu perfil</a>-->
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="userprofile.php">Editar meus dados</a>
                                <a class="dropdown-item" href="#">Meus Treinos</a>
                                <a class="dropdown-item" href="#">Minhas Dietas</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Termos de Uso</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Sair</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
        <!-- End Navbar -->
    </div>

    <!-- Sidebar -->
    <div class="sidebar">

        <div class="sidebar-background"></div>
        <div class="sidebar-wrapper scrollbar-inner">
            <div class="sidebar-content">
                <div class="user">
                    <div class="avatar-sm float-left mr-2">
                        <img src="../../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                            <span>
                                Nome usuario
                                <span class="user-level">Cliente</span>
                                <span class="caret"></span>
                            </span>
                        </a>
                        <div class="clearfix"></div>

                        <div class="collapse in" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a href="userprofile.php">
                                        <span class="link-collapse">Meu perfil</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#edit">
                                        <span class="link-collapse">Termos de Uso</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#settings">
                                        <span class="link-collapse">Sair</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a href="index.php">
                            <i class="fas fa-home"></i>
                            <p>Dashboard</p>
                            <span class="badge badge-count">5</span>
                        </a>
                    </li>
                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section">Funcoes do Cliente</h4>
                    </li>

                    <li class="nav-item">
                        <a data-toggle="collapse" href="#cliente">
                            <i class="fas fa-table"></i>
                            <p>Meus Dados</p>
                            <span class="caret"></span>
                        </a>

                        <div class="collapse" id="cliente">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="userprofile.php">
                                        <span class="sub-item">Alterar Perfil</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="usertreino_dieta.php">
                                        <span class="sub-item">Alterar Treinos e Dietas</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a data-toggle="collapse" href="#treinosdietas">
                            <i class="fas fa-table"></i>
                            <p>Treinos e Dietas</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="treinosdietas">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="meutreino.php">
                                        <span class="sub-item">Meu Treino</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="minhadieta.php">
                                        <span class="sub-item">Minha Dieta</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="nav-item">
                        <a data-toggle="collapse" href="#imc">
                            <i class="fas fa-table"></i>
                            <p>IMC</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="imc">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="queimc.php">
                                        <span class="sub-item">O que e IMC?</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="calcularimc.php">
                                        <span class="sub-item">Calcular IMC</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Sidebar -->
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <h4 class="page-title">Perfil do Usuário</h4>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-with-nav">
                            <div class="card-header">
                                <div class="row row-nav-line">
                                    <ul class="nav nav-tabs nav-line nav-color-secondary" role="tablist">
                                        <li class="nav-item"> <a class="nav-link active show" data-toggle="tab" href="#home" role="tab" aria-selected="true">Dados pessoais</a> </li>
                                        <!--<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-selected="false">Profile</a> </li>
											<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab" aria-selected="false">Settings</a> </li>-->
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <div class="form-group form-floating-label">
                                            <input id="nome" type="text" class="form-control input-border-bottom" required>
                                            <label for="inputFloatingLabel" class="placeholder">Insira seu nome</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-floating-label">
                                            <input id="email" type="email" class="form-control input-border-bottom" required>
                                            <label for="inputFloatingLabel" class="placeholder">Insira seu e-mail</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-floating-label">
                                            <input id="senha" type="password" class="form-control input-border-bottom" required>
                                            <label for="inputFloatingLabel" class="placeholder">Senha</label>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="separator-dashed"></div>
                                <br>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <div class="form-group form-floating-label">
                                            <input id="data_nascimento" type="date" class="form-control input-border-bottom" required>
                                            <label for="inputFloatingLabel" class="placeholder"></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-floating-label">
                                            <select class="form-control input-border-bottom" id="genero" required>
                                                <option value="0">&nbsp;Escolha uma das opções</option>
                                                <option>Macho</option>
                                                <option>Fêmea</option>
                                            </select>
                                            <label for="selectFloatingLabel" class="placeholder">Selecione o Gênero</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-floating-label">
                                            <input id="celular" type="text" class="form-control input-border-bottom" required>
                                            <label for="inputFloatingLabel" class="placeholder">(00) 90000-0000</label>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="separator-dashed"></div>
                                <br>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <div class="form-group form-floating-label">
                                            <input id="endereco" type="text" class="form-control input-border-bottom" required>
                                            <label for="inputFloatingLabel" class="placeholder">Insira seu endereço</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-floating-label">
                                            <input id="complemento" type="text" class="form-control input-border-bottom" required>
                                            <label for="inputFloatingLabel" class="placeholder">Complemento</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-floating-label">
                                            <input id="cep" type="text" class="form-control input-border-bottom" required>
                                            <label for="inputFloatingLabel" class="placeholder">Insira seu CEP</label>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="separator-dashed"></div>
                                <br>
                                <div class="text-right mt-3 mb-3">
                                    <button class="btn btn-success">Salvar</button>
                                    <button class="btn btn-danger">Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include HTML_FOOTER ?>
