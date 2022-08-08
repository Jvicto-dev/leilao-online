<?php
require __DIR__ . "/../../../vendor/autoload.php";

use \App\Models\Messages;
use App\api\classes\GoogleMapsClass;
use App\Models\Protection;

Protection::Protect();

$infor_google_maps = GoogleMapsClass::getInforMaps()[0];

// session_start();
$titulo = "Configuração Google maps";

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
                            <div class="col-md-12">

                                <div class="mb-3">
                                    <label for="" class="form-label">Localização link</label>
                                    <textarea class="form-control" id="link_google_maps"> <?= $infor_google_maps['link'] ?></textarea>
                                    <label for="floatingTextarea"></label>
                                </div>

                                <div class="mb-3">
                                    <iframe width="600" height="400" id="gmap_canvas" src="<?= $infor_google_maps['link'];  ?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                </div>

                                <button type="button" onclick="updateGoogleMaps()" class="btn btn-primary btn-lg mt-3">Alterar <i class="fa-solid fa-floppy-disk"></i></button>


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
    <script src="./../../../app/requests/footer.js"></script>

    <script>
        function updateGoogleMaps() {

            var link_google_maps = $("#link_google_maps").val()

            if (link_google_maps == "") {
                Swal.fire(
                    'Ops !',
                    'Você deixou um campo em branco !',
                    'warning'
                )
            } else {
                axios.post('../../api/controller.php', {
                    action: "update-google-maps",
                    values: [link_google_maps]
                }).then((res) => {

                    if (res.status == 201) {
                        Swal.fire({
                            // position: 'center',
                            icon: 'success',
                            title: 'Google maps alterado com sucesso !',
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