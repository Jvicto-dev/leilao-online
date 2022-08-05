<?php if (isset($_SESSION['user']) && ($_SESSION['user'][0]['nivel_acesso'] == 1 || $_SESSION['user'][0]['nivel_acesso'] == 2)) { ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container-fluid">
            <a class="navbar-brand" href="app/">PAINEL DE ADMINISTRAÇÃO</a>


        </div>
    </nav>
<?php } ?>

<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3">
    <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img src="logo.png" width="200px;" alt="">
    </a>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-4 link-dark">Home</a></li>
        <li><a href="#" class="nav-link px-4 link-dark">Sobre nós</a></li>
        <li><a href="cadastrar-pessoa-fisica.php" class="nav-link px-4 link-dark">Cadastrar</a></li>
        <li><a href="#" class="nav-link px-4 link-dark">Contato</a></li>
    </ul>

    <div class="col-md-3 text-end">
        <a href="login.php" class="btn btn-outline-primary me-2">
            <i class="fa-solid fa-arrow-right-to-bracket"></i>
            Login
        </a>

        <?php if (isset($_SESSION['user'])) { ?>

            <a href="app/Actions/logout.php" class="btn btn-outline-danger me-2">
                <i class="fa-solid fa-arrow-right-to-bracket"></i>
                Sair
            </a>

        <?php } ?>


    </div>
</header>