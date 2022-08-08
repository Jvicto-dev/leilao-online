<?php
require __DIR__ . "/../../../vendor/autoload.php";

use \App\Models\Messages;
use App\api\classes\EmpresaClass;
use App\Models\Protection;

Protection::Protect();

$dados_empresa = EmpresaClass::getInforEmpresa()[0];

// session_start();
$titulo = "Configuração dados da empresa";

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
                                    <input type="text" class="form-control" id="razao_social" value="<?= $dados_empresa['razao_social']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Cnpj</label>
                                    <input type="text" class="form-control" id="cnpj" value="<?= $dados_empresa['cnpj']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email" value="<?= $dados_empresa['email']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Matricula</label>
                                    <input type="text" class="form-control" id="matricula" value="<?= $dados_empresa['matricula']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Telefone Fixo</label>
                                    <input type="text" class="form-control" id="telefone_fixo" value="<?= $dados_empresa['telefone_fixo']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Celular</label>
                                    <input type="text" class="form-control" id="celular" value="<?= $dados_empresa['celular']; ?>">
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Cep</label>
                                    <input type="text" class="form-control" id="cep" value="<?= $dados_empresa['cep']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Logradouro</label>
                                    <input type="text" class="form-control" id="logradouro" value="<?= $dados_empresa['logradouro']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Complemento</label>
                                    <input type="text" class="form-control" id="complemento" value="<?= $dados_empresa['complemento']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Bairro</label>
                                    <input type="text" class="form-control" id="bairro" value="<?= $dados_empresa['bairro']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Localidade</label>
                                    <input type="text" class="form-control" id="localidade" value="<?= $dados_empresa['localidade']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Estado</label>
                                    <input type="text" class="form-control" id="estado" value="<?= $dados_empresa['estado']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Número</label>
                                    <input type="text" class="form-control" id="numero" value="<?= $dados_empresa['numero']; ?>">
                                </div>
                            </div>

                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="button" onclick="updateDadosEmpresa()">Editar</button>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
            <div class="col-md-1">
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>

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
    <script src="./../../../app/requests/footer.js"></script>

    <script>
        IMask(document.getElementById('cnpj'), mask_cnpj);
        IMask(document.getElementById('telefone'), telefone);
        IMask(document.getElementById('celular'), celular);

        function updateDadosEmpresa() {

            var razao_social = $("#razao_social").val()
            var cnpj = $("#cnpj").val()
            var email = $("#email").val()
            var matricula = $("#matricula").val()
            var telefone_fixo = $("#telefone_fixo").val()
            var celular = $("#celular").val()
            var cep = $("#cep").val()
            var logradouro = $("#logradouro").val()
            var complemento = $("#complemento").val()
            var bairro = $("#bairro").val()
            var localidade = $("#localidade").val()
            var estado = $("#estado").val()
            var numero = $("#numero").val()

            var array_values = [razao_social, cnpj, email, matricula, celular, cep, logradouro, bairro, localidade, estado, numero]

            // console.log(array_values)

            if (!verifyValues(array_values)) {
                Swal.fire(
                    'Ops!',
                    'Você deixou algum campo em branco !',
                    'warning'
                )
            } else {

                array_values.push(complemento)
                array_values.push(telefone_fixo)

                axios.post('../../api/controller.php', {
                    action: "update-infor-empresa",
                    values: [array_values]
                }).then((res) => {
                    if (res.status == 201) {
                        Swal.fire({
                            // position: 'center',
                            icon: 'success',
                            title: 'Informações da empresa alteradas com sucesso !',
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