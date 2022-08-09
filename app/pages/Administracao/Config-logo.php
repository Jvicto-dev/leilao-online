<?php
require __DIR__ . "/../../../vendor/autoload.php";

use \App\Models\Messages;
use App\api\classes\LogotipoClass;
use App\Models\Protection;

Protection::Protect();

$logotipo = LogotipoClass::getLogotipos()[0];



// session_start();
$titulo = "Configuração logotipo";

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
                            Configurações do site - Logos
                        </h5>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">

                                <div class="card">
                                    <button type="button" class="btn btn-light"><b>Logo Topo</b></button>
                                    <img src="../../files/<?= $logotipo['logo_head']; ?>" class="card-img-top" alt="..." width="50px;" style="border: solid 3px black; padding: 5px;">
                                    <hr>

                                    <div class="card-body">

                                        <img src="./../../public/img/camera.png" alt="Selecione uma imagem" id="imgPhotoHeader" class="imgPhoto">
                                        <form id="my-form">
                                            <input style="display: none;" type="file" id="flImageHeader" class="form-control mt-3">
                                        </form>

                                    </div>
                                    <div class="card-footer">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" onclick="updateLogoHeader()" class="btn btn-primary btn-lg mt-3">Enviar <i class="fa-solid fa-floppy-disk"></i></button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="card">
                                    <button type="button" class="btn btn-light"><b>Logo Rodapé</b></button>
                                    <img src="../../files/<?= $logotipo['logo_footer']; ?>" class="card-img-top" alt="..." width="50px;" style="border: solid 3px black; padding: 5px;">
                                    <hr>

                                    <div class="card-body">

                                        <img src="./../../public/img/camera.png" alt="Selecione uma imagem" id="imgPhotoFooter" class="imgPhoto">
                                        <form id="my-form">
                                            <input style="display: none;" type="file" id="flImageFooter" class="form-control mt-3">
                                        </form>

                                    </div>
                                    <div class="card-footer">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" onclick="updateLogoFooter()" class="btn btn-primary btn-lg mt-3">Enviar <i class="fa-solid fa-floppy-disk"></i></button>
                                        </div>
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
    <script src="./../../../app/requests/logotipo.js"></script>

    <script>
       
    </script>

</body>

</html>