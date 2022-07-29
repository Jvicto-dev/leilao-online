<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAINEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

</head>

</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">

                <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#"><i class="fa-solid fa-gear"></i> Painel</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        </div>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Admin
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">ADMIN</a></li>
                                    <li></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#" style="border-right: solid #282a36 2px; padding-right:5px; ">
                            <i class="fa-solid fa-gauge"></i> Inicio</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item" style="border-right: solid black 2px ; padding-right:5px; ">
                                    <a class="nav-link active" aria-current="page" href="#"> <i class="fa-solid fa-folder"></i> Categoria(s)</a>
                                </li>

                                <li class="nav-item" style="border-right: solid black 2px ; padding-right:5px; ">
                                    <a class="nav-link active" aria-current="page" href="#"> <i class="fa-solid fa-briefcase"></i> Administradores</a>
                                </li>

                                <li class="nav-item" style="border-right: solid black 2px ; padding-right:5px; ">
                                    <a class="nav-link active" aria-current="page" href="#"> <i class="fa-solid fa-gavel"></i> Criar Leilão</a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </nav>



            </div>
            <div class="col-md-1">
            </div>
        </div>
    </div>

    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h5> <i class="fa-solid fa-briefcase"></i> Administradores</h5>
                    </div>
                    <div class="card-body">




                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-1">
                                    <label for="" class="form-label">Login</label>
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>

                                <div class="mb-1">
                                    <label for="" class="form-label">Senha</label>
                                    <input type="email" class="form-control" id="" placeholder="">
                                </div>

                                <div class="mb-1">
                                    <label for="" class="form-label">E-mail</label>
                                    <input type="email" class="form-control" id="" placeholder="">
                                </div>

                                <div class="mb-1">
                                    <label for="" class="form-label">Cargo</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Selecione...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>

                                <button type="button" class="btn btn-primary mt-2 mb-3"> <i class="fa-solid fa-floppy-disk"></i> Salvar</button>
                                <br>

                            </div>
                            <hr>
                            <div class="row">

                                <div class="col-md-12 mt-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Todos os administradores Salvos</h5>
                                        </div>
                                        <div class="card-body">

                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#id</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Login</th>
                                                        <th scope="col">Senha</th>
                                                        <th scope="col">Nivel</th>
                                                        <th scope="col"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>contato@teste.com.br</td>
                                                        <td>admin-master</td>
                                                        <td>12345678</td>
                                                        <td>Administrador</td>
                                                        <td>

                                                            <button type="button" class="btn btn-success">
                                                                <i class="fa-solid fa-check"></i>
                                                            </button>
                                                        </td>

                                                    </tr>

                                                </tbody>
                                            </table>

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


</body>

</html>