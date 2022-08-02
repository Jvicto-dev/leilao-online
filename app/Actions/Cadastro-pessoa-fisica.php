<?php
require __DIR__ . '/../../vendor/autoload.php';

use App\api\Session;
use App\api\classes\AdministradorClass;
use App\Models\Cliente;
use App\Models\Endereco;

session_start();

$obCliente = new Cliente();
$ObEndereco = new Endereco();

$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
$http = (object)$post;

// Informações do Cliente
$obCliente->setNome($http->nome);
$obCliente->setEmail($http->email);
$obCliente->setCpf($http->cpf);
$obCliente->setRg($http->rg);
$obCliente->setDia($http->dia);
$obCliente->setMes($http->mes);
$obCliente->setAno($http->ano);
$obCliente->setSexo($http->sexo);
$obCliente->setTelefone($http->telefone);
$obCliente->setCelular($http->celular);
$obCliente->setSenha($http->senha);

$obCliente->setDoc_identidade($_FILES['doc_identidade']);
$obCliente->setDoc_comp_residencia($_FILES['doc_comp_residencia']);

// Informnações de endereco
$ObEndereco->setCep($http->cep);
$ObEndereco->setNumero($http->numero);
$ObEndereco->setLogradouro($http->logradouro);
$ObEndereco->setComplemento($http->complemento);
$ObEndereco->setUf($http->estado);
$ObEndereco->setLocalidade($http->cidade);
$ObEndereco->setBairro($http->bairro);

AdministradorClass::cadastroPessoaFisica($obCliente, $ObEndereco);
