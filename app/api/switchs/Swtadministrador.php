<?php

namespace App\api\switchs;

use App\api\Session;
use \App\api\classes\AdministradorClass;
use App\api\classes\BancarioClass;
use App\api\classes\CategoriasClass;
use App\api\classes\EmpresaClass;
use App\api\classes\FooterClass;
use App\api\classes\GoogleMapsClass;
use App\api\classes\SlidesClass;
use App\api\Sql;

class Swtadministrador
{
    public static function switch($action, $values)
    {
        switch ($action) {

            case "logo-footer":
                echo json_encode(FooterClass::updateLogoFooter($values));
                break;

            case "infors-footer":
                echo json_encode(FooterClass::updateInforsFooter($values));
                break;

            case "update-footer":
                echo json_encode(FooterClass::updateInforsFooter($values));
                break;

            case "update-google-maps":
                echo json_encode(GoogleMapsClass::updateGoogleMaps($values));
                break;

            case "update-infor-empresa":
                echo json_encode(EmpresaClass::updateInforEmpresa($values));
                break;

            case "update-dados-bancarios":
                echo json_encode(BancarioClass::updateDadosBancarios($values));
                break;

            case "get-slides":
                echo json_encode(SlidesClass::getSlides($values));
                break;

            case "deletar-slide":
                echo json_encode(SlidesClass::deletarSlide($values));
                break;

            case "get-categorias":
                echo json_encode(CategoriasClass::getCategorias($values));
                break;

            case "deletar-categoria";
                echo json_encode(CategoriasClass::geletarCategoria($values));
                break;

            case "adicionar-categoria":
                echo json_encode(CategoriasClass::adicionarCategoria($values));
                break;

            case "get-one-categoria":
                echo json_encode(CategoriasClass::getOneCategoria($values));
                break;

            case "update-categoria":
                echo json_encode(CategoriasClass::updateCategoria($values));
                break;
        }
    }
}
