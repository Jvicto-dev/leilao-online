<?php

namespace App\api;

use \App\api\switchs\Swtadministrador;
use \App\api\switchs\Swtadministradormaster;

use \App\api\Sql;

class Session
{
    public function SelectController($action, $values)
    {
        $cmd = "SELECT nivel_acesso FROM `users` WHERE id_users = ?";
        $response = Sql::line($cmd, [$_SESSION['user'][0]['id_users']]);

        if (($response['nivel_acesso'] == 1)) {
            // Swicth do administrador
            return Swtadministrador::switch($action, $values);
        } else if(($response['nivel_acesso'] == 2)){
            // Swicth do administrador master
            return Swtadministradormaster::switch($action, $values);
        }
    }
}
