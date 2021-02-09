<?php

namespace RCDE;

use Connexion;
use PDO;

require_once __DIR__ . '/../../config/Connexion.php';
require_once __DIR__ . '/../Model/TitularPremsa.php';

class TitularPremsaController
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
        return $result->fetchAll(PDO::FETCH_CLASS, 'RCDE\TitularPremsa');
    }
}
