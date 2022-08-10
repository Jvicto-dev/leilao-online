<?php
require __DIR__ . '/../../vendor/autoload.php';

use App\api\Session;
use App\api\classes\SlidesClass;

session_start();


echo json_encode(SlidesClass::newSlide($_FILES['image']));


