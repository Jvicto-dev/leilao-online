<?php
require __DIR__ . '/../../vendor/autoload.php';

use App\api\Session;
use App\api\classes\FooterClass;

session_start();

FooterClass::updateLogoFooter($_FILES['image']);