<?php

namespace App\api\classes;

use \App\api\Sql;
use App\Controllers\Upload;
use App\Models\Cliente;
use App\Models\Endereco;
use App\api\classes\ClienteClass;
use App\api\classes\EnderecoClass;

class AdministradorClass
{
    public function dd($array)
    {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }

    public static function insertFile($file)
    {
        if (isset($file)) {
            // Instancia de Upload
            $obUpload = new Upload($file);

            //Gera um nome aleatorio
            $obUpload->generateNewName();

            //Move os arquivos de upload
            $sucesso = $obUpload->Upload(__DIR__ . '/../../files/', false);

            if ($sucesso) {
                return [$obUpload->getBasename(), true];
            } else {
                return ["problemas ao enviar", false];
            }
        }
    }

    public static function cadastroPessoaFisica(Cliente $obCliente, Endereco $ObEndereco)
    {
        // envio do documento de identidade
        $doc_identidade = AdministradorClass::insertFile(
            $obCliente->getDoc_identidade(),
            '.pdf'
        );

        // envio do documento de comp residencia
        $doc_comp_residencia = AdministradorClass::insertFile(
            $obCliente->getDoc_comp_residencia(),
            '.pdf'
        );

        // setando valores dos nomes dos documentos
        $obCliente->setDoc_identidade($doc_identidade[0]);
        $obCliente->setDoc_comp_residencia($doc_comp_residencia[0]);

        // Criando o cadastro do cliente
        $cliente = ClienteClass::cadastrarPessoaFisica($obCliente);

        // id do cliente para foreinKey 
        $ObEndereco->setIdUsuarioFk($cliente[0]);

        // Endereco do cliente
        $endereco_cliente = EnderecoClass::cadastrarEnderecoCliente($ObEndereco);

        session_start();

        if ($doc_identidade[1] && $doc_comp_residencia[1] && $cliente[1] && $endereco_cliente[1]) {
            $_SESSION['mensagem'] = [
                'msg' => "Cadastro concluido com sucesso!",
                'type' => 'success'
            ];
            header('Location:../../login.php');
        }
    }
    public static function cadastroPessoaJuridica(Cliente $obCliente, Endereco $ObEndereco)
    {
        // envio do documento de identidade
        $doc_identidade = AdministradorClass::insertFile(
            $obCliente->getDoc_identidade()
        );

        // envio do documento de comp residencia
        $doc_comp_residencia = AdministradorClass::insertFile(
            $obCliente->getDoc_comp_residencia()
        );

        // setando valores dos nomes dos documentos
        $obCliente->setDoc_identidade($doc_identidade[0]);
        $obCliente->setDoc_comp_residencia($doc_comp_residencia[0]);

        // Criando o cadastro do cliente(pessoa juridica)
        $cliente = ClienteClass::cadastrarPessoaJuridica($obCliente);

        
        // id do cliente para foreinKey 
        $ObEndereco->setIdUsuarioFk($cliente[0]);

        // Endereco do cliente
        $endereco_cliente = EnderecoClass::cadastrarEnderecoCliente($ObEndereco);

        session_start();

        if ($doc_identidade[1] && $doc_comp_residencia[1] && $cliente[1] && $endereco_cliente[1]) {
            $_SESSION['mensagem'] = [
                'msg' => "Cadastro de pessoa juridica concluido com sucesso!",
                'type' => 'success'
            ];
            header('Location:../../login.php');
        } else {
            $_SESSION['mensagem'] = [
                'msg' => "Erro na operação !",
                'type' => 'error'
            ];
            header('Location:../../login.php');
        }
    }
   
}
