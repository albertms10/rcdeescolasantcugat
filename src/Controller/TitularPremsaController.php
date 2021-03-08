<?php

namespace RCDE\Controller;

use PDO;
use RCDE\Config\Connexion;
use RCDE\Model\TitularPremsa;

require_once $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';

class TitularPremsaController
{
    public static function llistaTitularsPremsa(): array
    {
        $connexion = new Connexion();

        $query = file_get_contents(__DIR__ . '/../Queries/select__titulars_premsa.sql');
        $result = $connexion->prepare($query);
        $result->execute();

        $connexion = null;
        return $result->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, TitularPremsa::class);
    }
}
