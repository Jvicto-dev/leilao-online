<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

</head>

</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<body>
    <br><br><br><br><br><br>



    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">


                <div class="card">
                    <div class="card-header">
                        <h3>Login do Admin</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="app/Actions/ActionLoginHash.php">

                            <p>Por favor, forneça seus dados de login</p>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                                <input name="email" value="<?= ($data->email ?? "") ?>" type="text" class="form-control" placeholder="Seu login aqui">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
                                <input name="senha" value="<?= ($data->senha ?? "") ?>" type="password" class="form-control" placeholder="Sua senha aqui">
                            </div>

                            <button type="submit" class="btn btn-success">Entrar</button>

                        </form>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>

    <!-- <div class="login-principal">
        <h1>Login do Admin</h1>
        <p>Por favor, forneça seus dados de login</p>
        <div class="input-group mb-3 login">

            <span class="input-group-text" id="basic-addon1"><img src="img/sombra-de-usuario-masculino.png"></span>
            <input type="text" class="form-control" placeholder="Seu login aqui" aria-label="Username"
                aria-describedby="basic-addon1">
        </div>


        <div class="input-group mb-3 login">

            <span class="input-group-text" id="basic-addon1"><img src="img/chaves.png"></span>
            <input type="text" class="form-control" placeholder="Sua senha aqui" aria-label="Username"
                aria-describedby="basic-addon1">
        </div>

        <button type="button" class="btn btn-success">Entrar</button>
    </div> -->


</body>

</html>