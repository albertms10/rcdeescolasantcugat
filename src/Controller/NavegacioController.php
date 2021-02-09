<?php

namespace RCDE;

use Connexion;
use PDO;

require_once __DIR__ . '/../../config/Connexion.php';
require_once __DIR__ . '/../Model/Pagina.php';
require_once __DIR__ . '/../Model/PaginaSeccio.php';

class NavegacioController
{
    public static function llistaPagines(): array
    {
        $connexion = new Connexion();

        $query = file_get_contents(__DIR__ . '/../Queries/select__pagines.sql');
        $result = $connexion->prepare($query);
        $result->execute();

        $connexion = null;
        return $result->fetchAll(PDO::FETCH_CLASS, 'RCDE\Pagina');
    }

    public static function llistaPaginesSeccions(string $link_pagina): array
    {
        $connexion = new Connexion();

        $query = file_get_contents(__DIR__ . '/../Queries/select__pagines_seccions.sql');
        $result = $connexion->prepare($query);
        $result->bindParam(':l', $link_pagina);
        $result->execute();

        $connexion = null;
        return $result->fetchAll(PDO::FETCH_CLASS, 'RCDE\PaginaSeccio');
    }
}
