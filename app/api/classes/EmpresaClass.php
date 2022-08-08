<?php

namespace App\api\classes;

use \App\api\Sql;

class EmpresaClass
{
    public static function getInforEmpresa()
    {
        $cmd = "SELECT * FROM `dados_empresa` WHERE dados_empresa.id_dados_empresa = 1";
        return sql::use($cmd, []);
    }

    public static function updateInforEmpresa($array)
    {

        echo "<pre>";
        print_r($array);
        echo "</pre>";

        $cmd = "UPDATE `dados_empresa` SET 
        `razao_social` = ?,
        `cnpj` = ?,
        `email` = ?,
        `matricula` = ?,
        `telefone_fixo` = ?,
        `celular` = ?,
        `cep` = ?,
        `logradouro` = ?,
        `complemento` = ?,
        `bairro` = ?,
        `localidade` = ?,
        `estado` = ?,
        `numero` = ?
        WHERE `dados_empresa`.`id_dados_empresa` = 1";

        $response = Sql::returnInsert($cmd, [
            $array[0][0],
            $array[0][1],
            $array[0][2],
            $array[0][3],
            $array[0][4],
            $array[0][12],
            $array[0][5],
            $array[0][6],
            $array[0][11],
            $array[0][7],
            $array[0][8],
            $array[0][9],
            $array[0][10],
        ]);

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
