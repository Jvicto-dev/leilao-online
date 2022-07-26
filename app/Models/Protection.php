<?php

namespace App\Models;

Class Protection
{
    public function Protect(){
        if(!isset($_SESSION)){
            session_start();
            if(!isset($_SESSION['user'])){
                header('Location:../index.php');
            }
        }
    }
}