<?php

namespace RCDE;

use Connexion;
use PDO;

require_once __DIR__ . '/../../config/Connexion.php';
require_once __DIR__ . '/../Model/ImatgeGaleria.php';

class ImatgeGaleriaController
{
    public static function llistaImatgesVisibles(): array
    {
        $connexion = new Connexion();
        $result = $connexion->prepare('SELECT * FROM imatges_galeria WHERE NOT hidden;');
        $result->execute();
        $connexion = null;
        return $result->fetchAll(PDO::FETCH_CLASS, 'RCDE\ImatgeGaleria');
    }
}
