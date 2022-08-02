<?php 

use App\api\classes\FooterClass;

$infor_footer = FooterClass::getInforsFooter()[0];

?>

<div class="col-md-12">
    <!-- Footer -->
    <footer class="text-center text-lg-start text-dark" style="background-color: #ECEFF1">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-between p-4 text-white" style="background-color: #21D192">
            <!-- Left -->
            <div class="me-5">
                <span>SITE LEILÃO OFICIAL CERTIFICADOS</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>

            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <img src="app/files/<?= $infor_footer['logo_footer'];  ?>" width="200px;" alt="">
                        <!-- <h6 class="text-uppercase fw-bold">Company name</h6> -->
                        <br><br>
                        <h6 class="text-uppercase fw-bold">Contatos</h6>
                        <p><i class="fas fa-home mr-3"></i> <?= $infor_footer['localizacao'];  ?></p>
                        <p><i class="fas fa-envelope mr-3"></i> <?= $infor_footer['email_contato'];  ?></p>
                        <p><i class="fas fa-phone mr-3"></i> <?= $infor_footer['telefone'];  ?></p>
                        <p><i class="fa-brands fa-whatsapp"></i> <?= $infor_footer['whatsapp'];  ?></p>

                    </div>
                    <!-- Grid column -->

                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Localização</h6>
                        <iframe width="400" height="200" id="gmap_canvas" src="<?= $infor_footer['localizacao_maps'];  ?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>


                    </div>

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                    </div>


                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            ©2022 Copyright:
            <p>© Leilões Pan - Todos os direitos reservados. Proibido a reprodução total ou parcial do layout, seleção, organização e disposição do conteúdo audiovisual deste software nos termos da Lei n. º 9.609/98 e 9.610/98.</p>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</div>