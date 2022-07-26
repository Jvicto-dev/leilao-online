<?php
require __DIR__ . "../../vendor/autoload.php";

use App\Models\Protection;

Protection::protect();

// echo "<pre>";
// print_r($_SESSION['user']['0']['nivel_acesso']);
// echo "</pre>";

// Apenas faço os redirecionamentos
if ($_SESSION['user']['0']['nivel_acesso'] == 1) {
    header('Location:pages/Administracao/Home.php');
} else if ($_SESSION['user']['0']['nivel_acesso'] == 2) {
    header('Location:pages/Master/Home.php');
}
