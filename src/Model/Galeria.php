<?php

namespace RCDE;

use Connexion;

require_once dirname(__FILE__) . "/../../config/Connexion.php";

class Galeria
{
    public static function llistaImatgesVisibles(): array
    {
        $connexion = new Connexion();
        $result = $connexion->prepare("SELECT * FROM imatges_galeria WHERE visible;");
        $result->execute();
        $connexion = null;
        return $result->fetchAll();
    }
}
