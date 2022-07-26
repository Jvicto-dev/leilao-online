<?php

namespace App\api\classes;

use \App\api\Session;
use \App\api\Sql;

class LoginClass
{
    private $email;
    private $senha;

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of senha
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set the value of senha
     *
     * @return  self
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }


    /**
     * Get the value of cpf
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    public function Logar(LoginClass $login)
    {

        $cmd = "SELECT * FROM users WHERE email = ?";

        $response = Sql::use($cmd, [
            $login->getEmail()
        ]);

        // não encontrou o email
        if (empty($response)) {
            $_SESSION['mensagem'] = [
                'msg' => "Email não encontrado",
                'type' => 'info'
            ];
            header('Location:../../');
        } else {

            // login com sucesso
            if (password_verify($login->getSenha(), $response[0]['pass'])) {
                $_SESSION['user'] = $response;
                header('Location:../');
            } else {
                // algo errado na senha
                $_SESSION['mensagem'] = [
                    'msg' => "Email ou senha invalidos !",
                    'type' => 'error'
                ];
                header('Location:../../');
            }
        }
    }
}
