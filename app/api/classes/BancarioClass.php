<?php

namespace App\api\classes;

use \App\api\Sql;

class BancarioClass
{
    public static function getInfoBancarias()
    {
        $cmd = "SELECT * FROM `dados_bancarios` WHERE dados_bancarios.id_dados_bancarios = 1";
        return Sql::use($cmd, []);
    }

    public static function updateDadosBancarios($array)
    {
        $cmd = "UPDATE `dados_bancarios` SET 
        `nome_completo` = ?,
        `cnpj` = ?,
        `banco` = ?,
        `agencia` = ?,
        `conta_corrente` = ?,
        `pix` = ?
        WHERE `dados_bancarios`.`id_dados_bancarios` = 1";

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
