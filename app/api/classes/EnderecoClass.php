<?php

namespace App\api\classes;

use \App\api\Sql;
use App\Controllers\Upload;

class EnderecoClass
{
    public static function cadastrarEnderecoCliente($ObEndereco)
    {
        $cmd = "INSERT INTO `enderecos` (`id_enderecos`,
        `cep`, 
        `logradouro`,
        `numero`,
        `localidade`, 
        `uf`, 
        `bairro`,
        `complemento`, 
        `id_usuario_fk`,
        `created`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, current_timestamp())";
        return Sql::returnInsert($cmd, [
            $ObEndereco->getCep(),
            $ObEndereco->getLogradouro(),
            $ObEndereco->getNumero(),
            $ObEndereco->getLocalidade(),
            $ObEndereco->getUf(),
            $ObEndereco->getBairro(),
            $ObEndereco->getComplemento(),
            $ObEndereco->getIdUsuarioFk()
        ]);
    }
}
