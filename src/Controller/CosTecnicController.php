<?php

namespace RCDE\Controller;

use PDO;
use RCDE\Config\Connexion;
use RCDE\Model\CosTecnic;

require_once $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';

class CosTecnicController
{
    public static function llistaEntrenadors(): array
    {
        $connexion = new Connexion();

        $query = file_get_contents(__DIR__ . '/../Queries/select__entrenadors.sql');
        $result = $connexion->prepare($query);
        $result->execute();

        $connexion = null;
        return $result->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, CosTecnic::class);
    }

    public static function llistaCompletaEntrenadors(): array
    {
        $connexion = new Connexion();

        $query = file_get_contents(__DIR__ . '/../Queries/select__entrenadors_complet.sql');
        $result = $connexion->prepare($query);
        $result->execute();

        $connexion = null;
        return $result->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, CosTecnic::class);
    }
}
