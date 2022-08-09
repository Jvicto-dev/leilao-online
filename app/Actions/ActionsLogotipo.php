<?php
require __DIR__ . '/../../vendor/autoload.php';

use App\api\Session;
use App\api\classes\LogotipoClass;

session_start();

$data = $_POST['action'];

switch ($data) {
    case 'update-logo-header':
        echo json_encode(LogotipoClass::updateLogoHeader($_FILES['image']));
        break;

    case "update-logo-footer":
        echo json_encode(LogotipoClass::updateLogoFooter($_FILES['image']));
        break;
}
