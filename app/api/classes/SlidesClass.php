<?php

namespace App\api\classes;

use \App\api\Sql;

class SlidesClass
{
    public static function getSlides($array)
    {
        $cmd = "SELECT * FROM `slides`";
        return Sql::use($cmd, $array);
    }

    public static function deletarSlide($array)
    {
        // array de validação
        $valida = [];

        // busca o arquivo no banco de dados
        $cmd = "SELECT * FROM `slides` WHERE slides.id_slides = ?";
        $response = Sql::use($cmd, $array);

        // Condicional que exclui da pasta
        if (file_exists(__DIR__ . '../../../files/' . $response[0]['slide'])) {
            $deletar = unlink(__DIR__ . '../../../files/' . $response[0]['slide']);
            if ($deletar) {
                array_push($valida, 'V');
            } else {
                array_push($valida, 'F');
            }
        }

        $cmd2 = "DELETE FROM `slides` WHERE `slides`.`id_slides` = ?";
        $response2 = Sql::returnInsert($cmd2, $array);

        if (in_array("F", $valida) || !($response2[1])) {
            return [
                false, http_response_code(500)
            ];
        } else {
            return [
                true, http_response_code(200)
            ];
        }
    }

    public static function newSlide($array)
    {
        $documento = AdministradorClass::insertFile($array);

        $nome_arquivo = $documento[0];

        $cmd = "INSERT INTO `slides` (`id_slides`, `slide`) VALUES (NULL, ?)";
        $response = Sql::returnInsert($cmd, [$nome_arquivo]);

        if ($documento[1] && $response[1]) {
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
