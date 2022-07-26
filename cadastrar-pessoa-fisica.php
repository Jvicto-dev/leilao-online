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


    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <title>Leilões Online</title>
</head>

<body>
    <div class="container">
        <!-- Menu -->
        <?php include __DIR__ . '/app/templates/header.php'; ?>
    </div>


    <br>

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
                            <a href="cadastrar-pessoa-fisica.php" class="btn btn-primary active">
                                <i class="fa-solid fa-user-large"></i>
                                <p>Pessoa Fisica</p>
                            </a>
                            <a href="cadastrar-pessoa-juridica.php" class="btn btn-primary">
                                <i class="fa-solid fa-user-tie"></i>
                                <p>Pessoa Juridica</p>
                            </a>
                        </div>

                        <br><br>

                        <div class="row">

                            <div class="card-group">
                                <div class="card">
                                    <div class="card-header">
                                        <h6>Dados pessoais <strong>(Pessoa Física)</strong></h6>
                                    </div>
                                    <div class="card-body">

                                        <div class="mb-3">
                                            <label for="" class="form-label">Nome</label>
                                            <input type="text" class="form-control" id="nome">
                                        </div>

                                        <div class="mb-3">
                                            <label for="" class="form-label">Email</label>
                                            <input type="text" class="form-control" id="email">
                                        </div>


                                        <div class="mb-3">
                                            <label for="" class="form-label">Cpf</label>
                                            <input type="text" class="form-control" id="cpf">
                                        </div>

                                        <div class="mb-3">
                                            <label for="" class="form-label">RG</label>
                                            <input type="text" class="form-control" id="rg">
                                        </div>

                                        <div class="mb-3">
                                            <label for="" class="form-label">Aniversario</label>

                                            <div class="input-group mb-3">


                                                <select class="form-select" id="dia">
                                                </select>

                                                <select class="form-select" id="mes">
                                                </select>

                                                <select class="form-select" id="ano">
                                                </select>

                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Sexo</label>

                                            <select class="form-select" id="sexo">
                                                <option value="1">Masculino</option>
                                                <option value="2">Feminino</option>
                                                <option value="3">Outro</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Telefone</label>
                                            <input type="text" class="form-control" id="telefone">
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Celular</label>
                                            <input type="text" class="form-control" id="celular">
                                        </div>

                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h6>Informações de endereço</h6>
                                    </div>
                                    <div class="card-body">

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Cep</label>
                                            <input type="text" class="form-control" id="">
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Endereço</label>
                                            <input type="text" class="form-control" id="">
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Numero</label>
                                            <input type="text" class="form-control" id="">
                                        </div>

                                        <div class="mb-3">
                                            <label for="" class="form-label">Cep</label>
                                            <input type="text" class="form-control" id="">
                                        </div>

                                        <div class="mb-3">
                                            <label for="" class="form-label">Complemento</label>
                                            <input type="text" class="form-control" id="">
                                        </div>

                                        <div class="mb-3">
                                            <label for="" class="form-label">Cidade</label>
                                            <input type="text" class="form-control" id="">
                                        </div>

                                        <div class="mb-3">
                                            <label for="" class="form-label">Estado</label>
                                            <input type="text" class="form-control" id="">
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div>
                                <hr>

                                <div class="mb-3 col-md-6">
                                    <label for="" class="form-label">Senha</label>
                                    <input type="text" class="form-control" id="senha">
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="" class="form-label">Confirmar a Senha</label>
                                    <input type="text" class="form-control" id="re_senha">
                                </div>
                            </div>



                        </div>
                        <div class="d-grid gap-2 mt-3">
                            <button class="btn btn-primary" type="button" onclick="cadastroPessoaFisica()">CADASTRAR</button>
                        </div>

                    </div>


                </div>
            </div>


        </div>
        <div class="col-md-1">
        </div>
    </div>
    </div>




    <br><br><br><br><br><br><br><br><br><br><br><br>




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
       

        var mask_cpf = {
            mask: [{
                mask: '000.000.000-00',
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

        IMask(document.getElementById('cpf'), mask_cpf);
        IMask(document.getElementById('telefone'), telefone);
        IMask(document.getElementById('celular'), celular);

    </script>

</body>

</html>


<?php Messages::Mensagens(); ?>