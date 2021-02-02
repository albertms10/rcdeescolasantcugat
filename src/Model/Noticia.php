<?php

namespace RCDE;

use Connexion;

require_once __DIR__ . '/../../config/Connexion.php';

class Noticia
{
    public static function llistaNoticies(): array
    {
        $connexion = new Connexion();
        $result = $connexion->prepare('
        SELECT *
        FROM noticies
        WHERE IFNULL(data_inici, NOW()) <= NOW()
        AND IFNULL(data_final, NOW()) >= NOW()
        ORDER BY ordre;
        ');
        $result->execute();
        $connexion = null;
        return $result->fetchAll();
    }
}
