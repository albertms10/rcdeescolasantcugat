<?php

namespace RCDE\Controller;

use PDO;
use RCDE\Config\Connexion;
use RCDE\Model\ImatgeGaleria;

require_once $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';

class ImatgeGaleriaController
{
    public static function llistaImatgesVisibles(): array
    {
        $connexion = new Connexion();

        $query = file_get_contents(__DIR__ . '/../Queries/select__imatges_visibles.sql');
        $result = $connexion->prepare($query);
        $result->execute();

        $connexion = null;
        return $result->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, ImatgeGaleria::class);
    }
}
