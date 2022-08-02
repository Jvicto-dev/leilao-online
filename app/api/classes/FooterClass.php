<?php

namespace App\api\classes;

use \App\api\Sql;

class FooterClass
{

    public static function getInforsFooter()
    {
        $cmd = "SELECT * FROM `footer`";
        return Sql::use($cmd, []);
    }

    public static function updateLogoFooter($array)
    {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
}
