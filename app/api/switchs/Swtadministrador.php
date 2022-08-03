<?php

namespace App\api\switchs;

use App\api\Session;
use \App\api\classes\AdministradorClass;
use App\api\classes\FooterClass;
use App\api\Sql;

class Swtadministrador
{
    public function switch($action, $values)
    {
        switch ($action) {

            case "logo-footer":
                echo json_encode(FooterClass::updateLogoFooter($values));
                break;

            case "infors-footer":
                echo json_encode(FooterClass::updateInforsFooter($values));
                break;
        }
    }
}
