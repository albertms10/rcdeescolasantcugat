<?php

namespace RCDE\Controller;

use PDO;
use RCDE\Config\Connexion;

require_once __DIR__ . '/../Config/Connexion.php';
require_once __DIR__ . '/../Model/TitularPremsa.php';

class TitularPremsaController
{
    public static function llistaTitularsPremsa(): array
    {
        $connexion = new Connexion();

        $query = file_get_contents(__DIR__ . '/../Queries/select__titulars_premsa.sql');
        $result = $connexion->prepare($query);
        $result->execute();

        $connexion = null;
        return $result->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'RCDE\Model\TitularPremsa');
    }
}
