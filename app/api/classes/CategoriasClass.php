<?php

namespace App\api\classes;

use \App\api\Sql;

class CategoriasClass
{
    public static function getCategorias($array)
    {
        $cmd = "SELECT * FROM `categorias`";
        return Sql::use($cmd, $array);
    }

    public static function geletarCategoria($array)
    {
        $cmd = "DELETE FROM `categorias` WHERE `categorias`.`id_categorias` = ?";
        $response = Sql::returnInsert($cmd, $array);

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

    public static function adicionarCategoria($array)
    {
        $cmd = "INSERT INTO `categorias` (`id_categorias`, `nome_categoria`, `icone`) VALUES (NULL, ?, ?)";
        $response = Sql::returnInsert($cmd, $array);

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

    public static function getOneCategoria($array)
    {
        $cmd = "SELECT * FROM `categorias` WHERE categorias.id_categorias = ?";
        return Sql::use($cmd, $array);
    }

    public static function updateCategoria($array)
    {
        $cmd = "UPDATE `categorias` SET `nome_categoria` = ?, `icone` = ? WHERE `categorias`.`id_categorias` = ?";
        $response = Sql::returnInsert($cmd, $array);

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
