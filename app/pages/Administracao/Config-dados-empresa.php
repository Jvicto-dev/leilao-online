<?php
require __DIR__ . "/../../../vendor/autoload.php";

use \App\Models\Messages;
use App\api\classes\FooterClass;
use App\Models\Protection;

Protection::Protect();

$infor_footer = FooterClass::getInforsFooter()[0];

// session_start();
$titulo = "Configuração rodapé";

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
                            Configurações do site - Dados da empresa
                        </h5>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">

                                <div class="mb-3">
                                    <label for="" class="form-label">Razão Social</label>
                                    <input type="text" class="form-control" id="">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Cnpj</label>
                                    <input type="text" class="form-control" id="">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Matricula</label>
                                    <input type="text" class="form-control" id="">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Felefone Fixo</label>
                                    <input type="text" class="form-control" id="">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Celular</label>
                                    <input type="text" class="form-control" id="">
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Cep</label>
                                    <div class="input-group mb-3 mt-1">
                                        <input type="text" id="cep" name="cep" class="form-control" placeholder="buscar cep...">
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary" type="button" onclick="getCep()">buscar</button>
                                        </span>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Logradouro</label>
                                    <input type="text" class="form-control" id="logradouro" name="logradouro">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Complemento</label>
                                    <input type="text" class="form-control" id="complemento" name="complemento">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Bairro</label>
                                    <input type="text" class="form-control" id="bairro" name="bairro">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Localidade</label>
                                    <input type="text" class="form-control" id="localidade" name="localidade">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Estado</label>
                                    <input type="text" class="form-control" id="estado" name="estado">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Numero</label>
                                    <input type="text" class="form-control" id="numero" name="numero">
                                </div>
                            </div>

                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="button">Editar</button>
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
    <script src="./../../../app/requests/footer.js"></script>

    <script>

    </script>

</body>

</html>