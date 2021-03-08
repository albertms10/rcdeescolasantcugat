<?php

namespace RCDE\Controller;

use RCDE\Config\Connexion;
use PDO;

require_once __DIR__ . '/../Config/Connexion.php';
require_once __DIR__ . '/../Model/CosTecnic.php';

class CosTecnicController
{
    public static function llistaEntrenadors(): array
    {
        $connexion = new Connexion();

        $query = file_get_contents(__DIR__ . '/../Queries/select__entrenadors.sql');
        $result = $connexion->prepare($query);
        $result->execute();

        $connexion = null;
        return $result->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'RCDE\Model\CosTecnic');
    }

    public static function llistaCompletaEntrenadors(): array
    {
        $connexion = new Connexion();

        $query = file_get_contents(__DIR__ . '/../Queries/select__entrenadors_complet.sql');
        $result = $connexion->prepare($query);
        $result->execute();

        $connexion = null;
        return $result->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'RCDE\Model\CosTecnic');
    }
}
