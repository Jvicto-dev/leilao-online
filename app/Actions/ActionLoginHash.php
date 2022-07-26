<?php
require __DIR__ . '/../../vendor/autoload.php';

use App\api\Session;
use App\api\classes\LoginClass;

session_start();

$obUser = new LoginClass();

$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
$http = (object)$post;

$obUser->setEmail($http->email);
$obUser->setSenha($http->senha);

LoginClass::Logar($obUser);
