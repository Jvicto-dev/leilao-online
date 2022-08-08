<?php

namespace App\api\classes;

use \App\api\Sql;
use App\api\classes\AdministradorClass;

class FooterClass
{

    public static function getInforsFooter()
    {
        $cmd = "SELECT * FROM `footer`";
        return Sql::use($cmd, []);
    }

    public static function updateLogoFooter($array)
    {
        // Arquivo em si
        $image = AdministradorClass::insertFile($array);

        // Nome do arquivo em questão
        $name = $image[0];

        // Array para validação
        $valida = [];

        // busca pelo arquivo no banco de dados
        $cmd2 = "SELECT * FROM `footer` WHERE footer.id_footer = 1";
        $response2 = Sql::use($cmd2, []);



        // condicional
        if (file_exists(__DIR__ . '../../../files/' . $response2[0]['logo_footer'])) {
            $deletar = unlink(__DIR__ . '../../../files/' . $response2[0]['logo_footer']);
            if ($deletar) {
                array_push($valida, 'V');
            } else {
                array_push($valida, 'F');
            }
        }



        // Altera o arquivo no banco de dados por um novo
        $cmd = "UPDATE `footer` SET `logo_footer` = ? WHERE `footer`.`id_footer` = 1";
        $response = Sql::returnInsert($cmd, [$name]);

        if (in_array("F", $valida) || !($response[1]) || !($image[1])) {
            http_response_code(500);
            echo json_encode(
                [
                    false // deu erro
                ]
            );
        } else {
            http_response_code(201); // deu certo !
            echo json_encode([
                true
            ]);
        }
    }


    public static function updateInforsFooter($array)
    {   
      

        $cmd = "UPDATE `footer` SET 
        `email_contato` = ?, 
        `telefone` = ?,
        `whatsapp` = ?,
        `localizacao` = ?
        WHERE `footer`.`id_footer` = 1";

        $response = Sql::returnInsert($cmd, $array[0]);

        if ($response[1]) {
            return [
                true, http_response_code(201)
            ];
        } else {
            return [
                false, http_response_code(500)
            ];
        }
    }
}
