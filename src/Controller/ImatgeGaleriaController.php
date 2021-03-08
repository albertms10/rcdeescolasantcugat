<?php

namespace RCDE\Controller;

use RCDE\Config\Connexion;
use PDO;

require_once __DIR__ . '/../Config/Connexion.php';
require_once __DIR__ . '/../Model/ImatgeGaleria.php';

class ImatgeGaleriaController
{
    public static function llistaImatgesVisibles(): array
    {
        $connexion = new Connexion();

        $query = file_get_contents(__DIR__ . '/../Queries/select__imatges_visibles.sql');
        $result = $connexion->prepare($query);
        $result->execute();

        $connexion = null;
        return $result->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'RCDE\Model\ImatgeGaleria');
    }
}
