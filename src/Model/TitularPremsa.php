<?php

namespace RCDE;

use Connexion;

require_once dirname(__FILE__) . "/../../config/Connexion.php";

class TitularPremsa
{
    public static function llistaTitularsPremsa(): array
    {
        $connexion = new Connexion();
        $result = $connexion->prepare("
        SELECT text_titular,
               data_titular,
               GROUP_CONCAT(
                       DISTINCT CONCAT(url_titular, ',', id_idioma)
                       SEPARATOR ';'
                   ) AS urls_titular
        FROM titulars_premsa AS tp
                 INNER JOIN url_titulars_premsa USING (id_titular)
        GROUP BY tp.id_titular, data_titular
        ORDER BY data_titular DESC;
        ");
        $result->execute();
        $connexion = null;
        return $result->fetchAll();
    }
}
