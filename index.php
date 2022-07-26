<?php
require __DIR__ . "/vendor/autoload.php";

use \App\Models\Messages;

session_start();

// Crio de maneira rapida um hash de senha
// echo password_hash('Lavor2022#@', PASSWORD_DEFAULT);

?>
<!doctype html>
<html lang="pt-Br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- SweetAlert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Leilões Online</title>
</head>

<body>
    <div class="container">
        <!-- Menu -->
        <?php include __DIR__ . '/app/templates/header.php'; ?>
    </div>

    <!-- Carrossel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="banner1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="banner2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="banner1.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <br>

    <!-- Categorias -->
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
                <button type="button" class="btn btn-primary btn-lg">
                    <i class="fa-solid fa-car-side"></i> </i><small> (450)</small> Veiculos
                </button>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
                <button type="button" class="btn btn-primary btn-lg">
                    <i class="fa-solid fa-motorcycle"></i></i><small> (229)</small> Motos
                </button>
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
                <button type="button" class="btn btn-primary btn-lg">
                    <i class="fa-solid fa-truck"></i></i><small> (99)</small> Utilitários
                </button>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
                <button type="button" class="btn btn-primary btn-lg">
                    <i class="fa-solid fa-building-lock"></i></i><small> (0) </small> Imoveis
                </button>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
                <button type="button" class="btn btn-primary btn-lg">

                    <i class="fa-solid fa-box-archive"></i><small> (46)</small> Outros
                </button>
            </a>
        </li>

    </ul>

    <br>

    <!-- Cards aplicação  -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
                <!-- CONTAINER INICIO -->
                <div class="card">
                    <div class="card-header">
                        <p>LEILÕES EM DESTAQUES</p>
                    </div>

                    <div class="card-body">

                        <div class="card-group">
                            <!-- / -->
                            <div class="card">
                                <button type="button" class="btn btn-light">Data do Leilão: <b>25/10/2022</b></button>
                                <img src="carro-exemplo.jpg" class="card-img-top" alt="...">
                                <button type="button" class="btn btn-light">Lote: <b>253</b></button>

                                <div class="card-body">
                                    <h5 class="card-title">Lote de veiculos</h5>
                                    <p class="card-text">Recuperado de financiamento</p>
                                </div>
                                <div class="card-footer">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-success">Aberto para lances</button>
                                        <button type="button" class="btn btn-outline-primary">lances: <b>4</b></button>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <button type="button" class="btn btn-light">Data do Leilão: <b>25/10/2022</b></button>
                                <img src="carro-exemplo.jpg" class="card-img-top" alt="...">
                                <button type="button" class="btn btn-light">Lote: <b>253</b></button>

                                <div class="card-body">
                                    <h5 class="card-title">Lote de veiculos</h5>
                                    <p class="card-text">Recuperado de financiamento</p>
                                </div>
                                <div class="card-footer">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-success">Aberto para lances</button>
                                        <button type="button" class="btn btn-outline-primary">lances: <b>4</b></button>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <button type="button" class="btn btn-light">Data do Leilão: <b>25/10/2022</b></button>
                                <img src="carro-exemplo.jpg" class="card-img-top" alt="...">
                                <button type="button" class="btn btn-light">Lote: <b>253</b></button>

                                <div class="card-body">
                                    <h5 class="card-title">Lote de veiculos</h5>
                                    <p class="card-text">Recuperado de financiamento</p>
                                    <p class="card-text">32 Lotes</p>
                                </div>
                                <div class="card-footer">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-success">Aberto para lances</button>
                                        <button type="button" class="btn btn-outline-primary">lances: <b>4</b></button>
                                    </div>
                                </div>
                            </div>




                            <!-- !/ -->
                        </div>

                        <br>

                        <div class="card-group">
                            <!-- / -->
                            <div class="card">
                                <button type="button" class="btn btn-light">Data do Leilão: <b>25/10/2022</b></button>
                                <img src="carro-exemplo.jpg" class="card-img-top" alt="...">
                                <button type="button" class="btn btn-light">Lote: <b>253</b></button>

                                <div class="card-body">
                                    <h5 class="card-title">Lote de veiculos</h5>
                                    <p class="card-text">Recuperado de financiamento</p>
                                </div>
                                <div class="card-footer">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-success">Aberto para lances</button>
                                        <button type="button" class="btn btn-outline-primary">lances: <b>4</b></button>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <button type="button" class="btn btn-light">Data do Leilão: <b>25/10/2022</b></button>
                                <img src="carro-exemplo.jpg" class="card-img-top" alt="...">
                                <button type="button" class="btn btn-light">Lote: <b>253</b></button>

                                <div class="card-body">
                                    <h5 class="card-title">Lote de veiculos</h5>
                                    <p class="card-text">Recuperado de financiamento</p>
                                </div>
                                <div class="card-footer">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-success">Aberto para lances</button>
                                        <button type="button" class="btn btn-outline-primary">lances: <b>4</b></button>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <button type="button" class="btn btn-light">Data do Leilão: <b>25/10/2022</b></button>
                                <img src="carro-exemplo.jpg" class="card-img-top" alt="...">
                                <button type="button" class="btn btn-light">Lote: <b>253</b></button>

                                <div class="card-body">
                                    <h5 class="card-title">Lote de veiculos</h5>
                                    <p class="card-text">Recuperado de financiamento</p>
                                    <p class="card-text">32 Lotes</p>
                                </div>
                                <div class="card-footer">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-success">Aberto para lances</button>
                                        <button type="button" class="btn btn-outline-primary">lances: <b>4</b></button>
                                    </div>
                                </div>
                            </div>




                            <!-- !/ -->
                        </div>

                        <br>

                        <div class="card-group">
                            <!-- / -->
                            <div class="card">
                                <button type="button" class="btn btn-light">Data do Leilão: <b>25/10/2022</b></button>
                                <img src="carro-exemplo.jpg" class="card-img-top" alt="...">
                                <button type="button" class="btn btn-light">Lote: <b>253</b></button>

                                <div class="card-body">
                                    <h5 class="card-title">Lote de veiculos</h5>
                                    <p class="card-text">Recuperado de financiamento</p>
                                </div>
                                <div class="card-footer">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-success">Aberto para lances</button>
                                        <button type="button" class="btn btn-outline-primary">lances: <b>4</b></button>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <button type="button" class="btn btn-light">Data do Leilão: <b>25/10/2022</b></button>
                                <img src="carro-exemplo.jpg" class="card-img-top" alt="...">
                                <button type="button" class="btn btn-light">Lote: <b>253</b></button>

                                <div class="card-body">
                                    <h5 class="card-title">Lote de veiculos</h5>
                                    <p class="card-text">Recuperado de financiamento</p>
                                </div>
                                <div class="card-footer">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-success">Aberto para lances</button>
                                        <button type="button" class="btn btn-outline-primary">lances: <b>4</b></button>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <button type="button" class="btn btn-light">Data do Leilão: <b>25/10/2022</b></button>
                                <img src="carro-exemplo.jpg" class="card-img-top" alt="...">
                                <button type="button" class="btn btn-light">Lote: <b>253</b></button>

                                <div class="card-body">
                                    <h5 class="card-title">Lote de veiculos</h5>
                                    <p class="card-text">Recuperado de financiamento</p>
                                    <p class="card-text">32 Lotes</p>
                                </div>
                                <div class="card-footer">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-success">Aberto para lances</button>
                                        <button type="button" class="btn btn-outline-primary">lances: <b>4</b></button>
                                    </div>
                                </div>
                            </div>

                            <!-- !/ -->
                        </div>

                    </div>
                </div>
            </div>
            <!-- CONTAINER FIM -->
            <div class="col-md-1">
            </div>
        </div>
    </div>


    <br><br><br>

    <!-- Footer -->

    <?php include __DIR__ . '/app/templates/footer.php'; ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="./app/public/js/Mensagens/Message.js"></script>



</body>

</html>

<?php Messages::Mensagens(); ?>