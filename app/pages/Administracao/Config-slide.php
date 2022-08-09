<?php
require __DIR__ . "/../../../vendor/autoload.php";

use \App\Models\Messages;
use App\api\classes\FooterClass;
use App\Models\Protection;

Protection::Protect();

$infor_footer = FooterClass::getInforsFooter()[0];

// session_start();
$titulo = "Configuração do slide";

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
            <!-- Container principal -->
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h5>
                            <i class="fa-solid fa-gears"></i>
                            Configurações do site - Slides
                        </h5>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="form-label">Quantos slides ?</label>

                                <div class="input-group mb-3 mt-1">
                                    <input type="text" id="cep" name="cep" class="form-control" placeholder="ex: 3">
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Gerar</button>
                                    </span>
                                </div>

                            </div>
                        </div>

                        <hr>
                        <h2>Slides Atuais:</h2><br>


                        <div class="row">

                            <div id="div_slides"></div>

                            <!-- <div class="card">
                                <div class="card-header mt-3">
                                    <b>Banner 1</b>
                                </div>
                                <div class="card-body">
                                    <img src="../../files/banner1.jpg" class="card-img-top" alt="..." width="50px;" style="border: solid 3px black; padding: 5px;">
                                </div>
                                <div class="card-footer mb-3">
                                    <button type="button" class="btn btn-danger btn-lg" style="float: right;">
                                        Excluir
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </div>
                            </div> -->







                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                </div>
            </div>
        </div>
        <br><br><br>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- Jquery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- Axios -->
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

        <!-- Mensagens -->
        <script src="./../../public/js/Mensagens/Message.js"></script>

        <!-- Máscaras -->
        <script src="https://unpkg.com/imask"></script>

        <!-- Requisições -->
        <script src="./../../../app/requests/controls.js"></script>
        <script src="./../../../app/requests/slides.js"></script>

        <script>
           
            getSlides()

            
        </script>

</body>

</html>