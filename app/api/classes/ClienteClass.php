<?php

namespace App\api\classes;

use \App\api\Sql;
use App\Controllers\Upload;

class ClienteClass
{
    public static function cadastrarPessoaFisica($obCliente)
    {
        $cmd = "INSERT INTO `users` (
        `id_users`,
        `nome`,
        `email`,
        `pass`,
        `nivel_acesso`, 
        `created_at`, 
        `cpf`, 
        `rg`,
        `sexo`,
        `telefone`, 
        `celular`, 
        `dia`,
        `mes`, 
        `ano`,
        `cnpj`,
        `ie`, 
        `doc_identidade`, 
        `doc_comp_residencia`,
        `status`) VALUES (NULL, ?, ?, ?, 2, current_timestamp(), ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 1)";
        return Sql::returnInsert($cmd, [
            $obCliente->getNome(),
            $obCliente->getEmail(),
            password_hash($obCliente->getSenha(), PASSWORD_DEFAULT),
            $obCliente->getCpf(),
            $obCliente->getRg(),
            $obCliente->getSexo(),
            $obCliente->getTelefone(),
            $obCliente->getCelular(),
            $obCliente->getDia(),
            $obCliente->getMes(),
            $obCliente->getAno(),
            null,
            null,
            $obCliente->getDoc_identidade(),
            $obCliente->getDoc_comp_residencia()
        ]);
    }

    public static function cadastrarPessoaJuridica($obCliente)
    {
        $cmd = "INSERT INTO `users` (
        `id_users`,
        `nome`,
        `email`,
        `pass`,
        `nivel_acesso`, 
        `created_at`, 
        `cpf`, 
        `rg`,
        `sexo`,
        `telefone`, 
        `celular`, 
        `dia`,
        `mes`, 
        `ano`,
        `cnpj`,
        `ie`, 
        `doc_identidade`, 
        `doc_comp_residencia`,
        `status`) VALUES (NULL, ?, ?, ?, 2, current_timestamp(), ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 1)";
        return Sql::returnInsert($cmd, [
            $obCliente->getNome(),
            $obCliente->getEmail(),
            password_hash($obCliente->getSenha(), PASSWORD_DEFAULT),
            null,
            null,
            $obCliente->getSexo(),
            $obCliente->getTelefone(),
            $obCliente->getCelular(),
            $obCliente->getDia(),
            $obCliente->getMes(),
            $obCliente->getAno(),
            $obCliente->getCnpj(),
            $obCliente->getIe(),
            $obCliente->getDoc_identidade(),
            $obCliente->getDoc_comp_residencia()
        ]);
    }
}
