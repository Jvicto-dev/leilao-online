<?php

use App\api\classes\SlidesClass;

$allSlides = SlidesClass::getSlides([]);

?>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-indicators">
        <?php
        for ($i = 0; $i < count($allSlides); $i++) {
            if ($i == 0) {   ?>

                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $i ?>" class="active" aria-current="true" aria-label="Slide <?= $i ?>"></button>
            <?php } else { ?>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $i ?>" aria-label="Slide <?= $i ?>"></button>

        <?php }
        } ?>
    </div>
    <div class="carousel-inner">
        <?php
        for ($i = 0; $i < count($allSlides); $i++) {
            if ($i == 0) {   ?>
                <div class="carousel-item active">
                    <img src="./app/files/<?= $allSlides[$i]['slide'] ?>" class="d-block w-100" alt="...">
                </div>

            <?php } else { ?>
                <div class="carousel-item">
                    <img src="./app/files/<?= $allSlides[$i]['slide'] ?>" class="d-block w-100" alt="...">
                </div>
        <?php }
        } ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Proximo</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
</div>