<?php
require __DIR__ . '/../../vendor/autoload.php';

use App\api\Session;
use App\api\classes\AdministradorClass;

session_start();


$data = json_decode(file_get_contents('php://input'), true);
$values = $data['values'];


AdministradorClass::cadastroPessoaFisica($values);
