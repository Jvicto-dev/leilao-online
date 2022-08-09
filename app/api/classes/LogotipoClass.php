<?php

namespace App\api\classes;

use \App\api\Sql;

class LogotipoClass
{

    public static function getLogotipos()
    {
        $cmd = "SELECT * FROM `logotipo` WHERE logotipo.id_logotipo = 1";
        return Sql::use($cmd, []);
    }

    public static function updateLogoHeader($array)
    {
        //Array de validação
        $valida = [];

        //Busca pelo arquivo
        $cmd2 = "SELECT * FROM `logotipo` WHERE logotipo.id_logotipo = 1";
        $response2 = Sql::use($cmd2, []);

        // Condicional
        if (file_exists(__DIR__ . '../../../files/' . $response2[0]['logo_head'])) {
            $deletar = unlink(__DIR__ . '../../../files/' . $response2[0]['logo_head']);
            if ($deletar) {
                array_push($valida, 'V');
            } else {
                array_push($valida, 'F');
            }
        }

        // Arquivo em si sendo inserido
        $image = AdministradorClass::insertFile($array);

        // Nome do arquivo em questão
        $name = $image[0];

        // Altera o arquivo no banco de dados por um novo
        $cmd = "UPDATE `logotipo` SET `logo_head` = ? WHERE `logotipo`.`id_logotipo` = 1";
        $response = Sql::returnInsert($cmd, [$name]);

        if (in_array("F", $valida) || !($response[1]) || !($image[1])) {
            http_response_code(500);
            return
                [
                    false // deu erro
                ];
        } else {
            http_response_code(201); // deu certo !
            return [
                true
            ];
        }
    }

    public static function updateLogoFooter($array){
        //Array de validação
        $valida = [];

        //Busca pelo arquivo
        $cmd2 = "SELECT * FROM `logotipo` WHERE logotipo.id_logotipo = 1";
        $response2 = Sql::use($cmd2, []);

        // Condicional
        if (file_exists(__DIR__ . '../../../files/' . $response2[0]['logo_footer'])) {
            $deletar = unlink(__DIR__ . '../../../files/' . $response2[0]['logo_footer']);
            if ($deletar) {
                array_push($valida, 'V');
            } else {
                array_push($valida, 'F');
            }
        }

        // Arquivo em si sendo inserido
        $image = AdministradorClass::insertFile($array);

        // Nome do arquivo em questão
        $name = $image[0];

        // Altera o arquivo no banco de dados por um novo
        $cmd = "UPDATE `logotipo` SET `logo_footer` = ? WHERE `logotipo`.`id_logotipo` = 1";
        $response = Sql::returnInsert($cmd, [$name]);

        if (in_array("F", $valida) || !($response[1]) || !($image[1])) {
            http_response_code(500);
            return
                [
                    false // deu erro
                ];
        } else {
            http_response_code(201); // deu certo !
            return [
                true
            ];
        }
    }

}
