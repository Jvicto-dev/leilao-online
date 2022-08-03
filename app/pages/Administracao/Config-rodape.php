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
                            Configurações do site - Rodapé
                        </h5>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">

                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email Contato</label>
                                    <input type="email" class="form-control" id="" value="<?= $infor_footer['email_contato'] ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Telefone</label>
                                    <input type="email" class="form-control" id="" value="<?= $infor_footer['telefone'] ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Whatsapp</label>
                                    <input type="email" class="form-control" id="" value="<?= $infor_footer['whatsapp'] ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Localização</label>
                                    <input type="email" class="form-control" id="" value="<?= $infor_footer['localizacao'] ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Localização link</label>
                                    <textarea class="form-control"> <?= $infor_footer['localizacao_maps'] ?></textarea>
                                    <label for="floatingTextarea"></label>
                                </div>

                                <div class="mb-3">
                                    <iframe width="400" height="200" id="gmap_canvas" src="<?= $infor_footer['localizacao_maps'];  ?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

                                </div>




                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Logo footer</label>



                                    <br><br>
                                    <img src="./../../files/<?= $infor_footer['logo_footer'];  ?>" alt="" width="300px">


                                    <hr>


                                    <img src="./../../public/img/camera.png" alt="Selecione uma imagem" id="imgPhoto">
                                    <form id="my-form">
                                        <input type="file" id="flImage" name="fImage" class="form-control mt-3">


                                        <button type="button" onclick="sendImage()" class="btn btn-primary btn-lg mt-3">Enviar <i class="fa-solid fa-floppy-disk"></i></button>

                                    </form>

                                    <br><br>


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
    <!-- <script src="./../../../app/requests/cadastro.js"></script> -->

    <script>
        let photo = document.getElementById('imgPhoto');
        let file = document.getElementById('flImage');

        photo.addEventListener('click', () => {
            file.click();
        });

        file.addEventListener('change', () => {

            if (file.files.length <= 0) {
                return;
            }

            let reader = new FileReader();

            reader.onload = () => {
                photo.src = reader.result;
            }

            reader.readAsDataURL(file.files[0]);
        });


        function sendImage() {

            const formData = new FormData();
            const file = document.getElementById('flImage');
            const img = file.files[0];
            formData.append('image', img);

            axios.post('../../Actions/ActionFooterLogo.php', formData).then((res) => {
                console.log(res)
            })

        }
    </script>

</body>

</html>