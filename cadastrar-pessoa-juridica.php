<?php
require __DIR__ . "/vendor/autoload.php";

use \App\Models\Messages;

session_start();

$titulo = "Cadastro pessoa juridica";


?>
<!doctype html>
<html lang="pt-Br">

<?php include __DIR__ . '/app/templates/head.php'; ?>


<body>
    <div class="container">
        <!-- Menu -->
        <?php include __DIR__ . '/app/templates/header.php'; ?>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">


                <div class="card">
                    <div class="card-header">
                        <h4> <i class="fa-solid fa-address-card"></i> Faça seu cadastro </h4>
                    </div>

                    <div class="card-body">

                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="cadastrar-pessoa-fisica.php" class="btn btn-primary">
                                <i class="fa-solid fa-user-large"></i>
                                <p>Pessoa Fisica</p>
                            </a>
                            <a href="cadastrar-pessoa-juridica.php" class="btn btn-primary active">
                                <i class="fa-solid fa-user-tie"></i>
                                <p>Pessoa Juridica</p>
                            </a>
                        </div>

                        <br><br>

                        <div class="row">
                            <form action="./app/Actions/Cadastro-pessoa-juridica.php" method="POST" id="form-cadastro-pessoa-fisica" enctype="multipart/form-data">
                                <div class="row">

                                    <div class="card-group">
                                        <div class="card">
                                            <div class="card-header">
                                                <h6>Dados pessoais <strong>(PESSOA JURIDICA)</strong></h6>
                                            </div>
                                            <div class="card-body">

                                                <div class="mb-3">
                                                    <label for="" class="form-label">Nome</label>
                                                    <input type="text" class="form-control" id="nome" name="nome">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="" class="form-label">Email</label>
                                                    <input type="text" class="form-control" id="email" name="email">
                                                </div>


                                                <div class="mb-3">
                                                    <label for="" class="form-label">CNPJ</label>
                                                    <input type="text" class="form-control" id="cnpj" name="cnpj">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="" class="form-label">IE</label>
                                                    <input type="text" class="form-control" id="ie" name="ie">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="" class="form-label">Aniversario</label>

                                                    <div class="input-group mb-3">

                                                        <select class="form-select" id="dia" name="dia">
                                                        </select>

                                                        <select class="form-select" id="mes" name="mes">
                                                        </select>

                                                        <select class="form-select" id="ano" name="ano">
                                                        </select>

                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Sexo</label>

                                                    <select class="form-select" id="sexo" name="sexo">
                                                        <option value="1">Masculino</option>
                                                        <option value="2">Feminino</option>
                                                        <option value="3">Outro</option>
                                                    </select>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Telefone</label>
                                                    <input type="text" class="form-control" id="telefone" name="telefone">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Celular</label>
                                                    <input type="text" class="form-control" id="celular" name="celular">
                                                </div>

                                            </div>
                                        </div>

                                       <div class="card">
                                        <div class="card-header">
                                            <h6>Informações de endereço</h6>
                                        </div>
                                        <div class="card-body">

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
                                    </div>

                                    </div>
                                    <div>

                                        <hr>

                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Senha</label>
                                                    <input type="text" class="form-control" id="senha" name="senha">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="" class="form-label">Confirmar a Senha</label>
                                                    <input type="text" class="form-control" id="re_senha" name="re_senha">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Documento de identidade</label>
                                                    <input type="file" class="form-control" id="doc_identidade" name="doc_identidade">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Comprovante de residência</label>
                                                    <input type="file" class="form-control" id="doc_comp_residencia" name="doc_comp_residencia">
                                                </div>
                                            </div>

                                        </div>
                                    </div>



                                </div>
                                <div class="d-grid gap-2 mt-3">
                                    <button class="btn btn-primary" type="button" onclick="cadastroPessoaJuridica()">CADASTRAR</button>
                                </div>
                            </form>
                        </div>



                    </div>


                </div>
            </div>


        </div>
        <div class="col-md-1">
        </div>
    </div>
    </div>




    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



    <!-- Footer -->

    <?php include __DIR__ . '/app/templates/footer.php'; ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script src="./app/public/js/Mensagens/Message.js"></script>

    <script src="https://unpkg.com/imask"></script>


    <script src="./app/requests/cadastro.js"></script>


    <script>
        var mask_cnpj = {
            mask: [{
                mask: '00.000.000/0000-00',
                maxLength: 11
            }]
        }

        var telefone = {
            mask: [{
                mask: '(00) 0 0000-0000',
                maxLength: 11
            }]
        }

        var celular = {
            mask: [{
                mask: '(00) 0 0000-0000',
                maxLength: 11
            }]
        }

        IMask(document.getElementById('cnpj'), mask_cnpj);
        IMask(document.getElementById('telefone'), telefone);
        IMask(document.getElementById('celular'), celular);

        function getCep() {
            var cep = $("#cep").val()
            axios.get(`https://viacep.com.br/ws/${cep}/json/`).then(res => {

                console.log(res)
                $("#logradouro").val(res.data.logradouro)
                $("#complemento").val(res.data.complemento)
                $("#bairro").val(res.data.bairro)
                $("#localidade").val(res.data.localidade)
                $("#uf").val(res.data.uf)
            })
        }
    </script>

</body>

</html>

<?php Messages::Mensagens(); ?>