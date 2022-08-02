<?php
require __DIR__ . "/../../../vendor/autoload.php";

use \App\Models\Messages;
use App\Models\Protection;

Protection::Protect();

// session_start();
$titulo = "Home";

?>
<!DOCTYPE html>
<html lang="pt-br">

<?php include __DIR__ . '/../../templates/head.php'; ?>


</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<body>

    <?php include __DIR__ . './../../templates/nav-menu.php' ?>

    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h5>
                            <i class="fa-solid fa-gears"></i>
                            Configurações do site - Home
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h1><i class="fa-solid fa-image"></i></h1>
                                        <h3>Logotipo</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h1><i class="fa-solid fa-location-dot"></i></h1>
                                        <h3>Google Maps</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h1><i class="fa-solid fa-bars"></i></h1>
                                        <a href="Config-rodape.php">
                                            <h3>Rodapé</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h1><i class="fa-solid fa-images"></i></h1>
                                        <h3>Slide</h3>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <br>


                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h1><i class="fa-solid fa-bars"></i></h1>
                                        <h3>Banners Footer</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h1><i class="fa-solid fa-globe"></i></h1>
                                        <h3>Dados da empresa</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h1><i class="fa-solid fa-hand-holding-dollar"></i></h1>
                                        <h3>dados bancarios</h3>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
            <div class="col-md-1">
            </div>
        </div>
    </div>



</body>

</html>