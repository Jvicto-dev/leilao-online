<?php
require __DIR__ . "/../../../vendor/autoload.php";

use \App\Models\Messages;
use App\api\classes\BancarioClass;
use App\Models\Protection;

Protection::Protect();

$info_bancarias = BancarioClass::getInfoBancarias()[0];

// session_start();
$titulo = "Configuração dados bancarios";

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
                            Configurações do site - Dados bancarios
                        </h5>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">

                                <div class="mb-3">
                                    <label for="" class="form-label">Nome completo</label>
                                    <input type="text" class="form-control" id="nome_completo" value="<?= $info_bancarias['nome_completo'] ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Cnpj</label>
                                    <input type="text" class="form-control" id="cnpj" value="<?= $info_bancarias['cnpj'] ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Banco</label>
                                    <input type="text" class="form-control" id="banco" value="<?= $info_bancarias['banco'] ?>">
                                </div>


                            </div>

                            <div class="col-md-6">

                                <div class="mb-3">
                                    <label for="" class="form-label">Agência</label>
                                    <input type="text" class="form-control" id="agencia" value="<?= $info_bancarias['agencia'] ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Conta corrente</label>
                                    <input type="text" class="form-control" id="conta_corrente" value="<?= $info_bancarias['conta_corrente'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Pix</label>
                                    <input type="text" class="form-control" id="pix" value="<?= $info_bancarias['pix'] ?>">
                                </div>
                            </div>


                            <div class="d-grid gap-2">
                                <button onclick="editarInforBancaria()" class="btn btn-primary" type="button">Editar</button>
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

    <script>
        IMask(document.getElementById('cnpj'), mask_cnpj);


        function editarInforBancaria() {
            var nome_completo = $("#nome_completo").val()
            var cnpj = $("#cnpj").val()
            var banco = $("#banco").val()
            var agencia = $("#agencia").val()
            var conta_corrente = $("#conta_corrente").val()
            var pix = $("#pix").val()

            var array_values = [nome_completo, cnpj, banco, agencia, conta_corrente, pix]

            if (!verifyValues(array_values)) {
                Swal.fire(
                    'Ops!',
                    'Você deixou algum campo em branco !',
                    'warning'
                )
            } else {
                axios.post('../../api/controller.php', {
                    action: "update-dados-bancarios",
                    values: [
                        array_values
                    ]
                }).then((res) => {
                    if (res.status == 201) {
                        Swal.fire({
                            // position: 'center',
                            icon: 'success',
                            title: 'Dados bancarios alteradas com sucesso !',
                            showConfirmButton: true,
                        }).then((result) => {
                            if (result.dismiss === Swal.DismissReason.timer) {
                                location.reload()
                            } else if (result.isConfirmed) {
                                location.reload()
                            } else {
                                location.reload()
                            }
                        })
                    }
                }).catch(function(error) {
                    if (error.response) {
                        Swal.fire(
                            'Ops',
                            'Ocorreu um erro com a aplicação !',
                            'error'
                        );
                        // The request was made and the server responded with a status code
                        // that falls out of the range of 2xx
                        console.log(error.response.data);
                        console.log(error.response.status);
                        console.log(error.response.headers);
                    } else if (error.request) {
                        // The request was made but no response was received
                        // `error.request` is an instance of XMLHttpRequest in the browser and an instance of
                        // http.ClientRequest in node.js
                        console.log(error.request);
                    } else {
                        // Something happened in setting up the request that triggered an Error
                        console.log('Error', error.message);
                    }
                    console.log(error.config);
                });
            }

        }
    </script>

</body>

</html>