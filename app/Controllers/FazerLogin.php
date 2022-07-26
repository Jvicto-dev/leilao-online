<?php

namespace App\Controllers;

use \App\Models\Login;
use App\Database\Connect;

class FazerLogin
{
    public function Logar(Login $login)
    {

        $sql = 'SELECT * FROM users
        WHERE email = ? AND pass = ?';

        $stmt = Connect::getInstance()->prepare($sql);
        $stmt->bindValue(1, $login->getEmail());
        $stmt->bindValue(2, $login->getPass());
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            session_start();
            $_SESSION['user'] = $resultado;

            header('Location:../index.php');
        } else {
            header('Location:../../index.php');
        }
    }
}
