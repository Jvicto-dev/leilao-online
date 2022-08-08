<?php

namespace App\api\classes;

use \App\api\Sql;

class GoogleMapsClass
{
    public static function getInforMaps()
    {
        $cmd = "SELECT * FROM `google_maps` LIMIT 1";
        return Sql::use($cmd, []);
    }

    public static function updateGoogleMaps($array)
    {
        $cmd = "UPDATE `google_maps` SET `link` = ? WHERE `google_maps`.`id_google_maps` = 1";
        $response = Sql::returnInsert($cmd, $array);

        if ($response[1]) {
            return [
                true, http_response_code(201)
            ];
        } else {
            return [
                false, http_response_code(500)
            ];
        }
        
    }
}
