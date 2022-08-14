<?php
require __DIR__ . "/../../../vendor/autoload.php";

use \App\Models\Messages;
use App\api\classes\BancarioClass;
use App\Models\Protection;

Protection::Protect();

// session_start();
$titulo = "Configuração categorias";

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
                                    <label for="" class="form-label">Nome Categoria</label>
                                    <input type="text" class="form-control" id="nome_categoria">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Icone Categoria</label>
                                    <input type="text" class="form-control" id="icone_categoria">
                                </div>

                                <button onclick="adicionarCategoria()" class="btn btn-primary" type="button">Adicionar</button>

                            </div>
                        </div>

                        <hr>

                        <div class="col-md-12 mt-3">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Todas categorias salvas</h5>
                                </div>
                                <div class="card-body">

                                    <table class="table" id="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#id</th>
                                                <th scope="col">Nome da categoria</th>
                                                <th scope="col">Icone</th>
                                                <th scope="col">Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody_categorias">


                                        </tbody>
                                    </table>

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

    <!-- Modal -->
    <div class="modal fade" id="modal_editar_categoria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">EDITAR CATEGORIA</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <input type="text" id="id_categoria">

                    <div class="mb-3">
                        <label for="" class="form-label">Nome Categoria</label>
                        <input type="text" class="form-control" id="editar_nome_categoria">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Icone Categoria</label>
                        <input type="text" class="form-control" id="editar_icone_categoria">
                    </div>
                    <h2>Icone:</h2>
                    <h1 id="icone_show"></h1>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary" onclick="updateCategoria()">Editar</button>
                </div>
            </div>
        </div>
    </div>

    <div id="teste"></div>

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
    <script src="./../../../app/requests/categorias.js"></script>

    <!-- datatables -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
        getCategorias()

        function teste() {
            axios.post('../../api/controller.php', {
                action: "get-numeros",
                values: [

                ]
            }).then((res) => {
                console.log(res)

                html = "";

                res.data.forEach(element => {
                    html += `<h1>${element}</h1>`;
                });

                $("#teste").html(html)

            })
        }

        teste()
    </script>

</body>

</html>