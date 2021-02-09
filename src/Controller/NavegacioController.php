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
        $result = $connexion->prepare("SELECT * FROM pagines WHERE titol_pagina <> '__index__';");
        $result->execute();
        $connexion = null;
        return $result->fetchAll(PDO::FETCH_CLASS, 'RCDE\Pagina');
    }

    public static function llistaPaginesSeccions(string $link_pagina): array
    {
        $connexion = new Connexion();
        $result = $connexion->prepare('
        SELECT titol_pagina_seccio, link_pagina_seccio, hidden
        FROM pagines_seccions
           INNER JOIN pagines USING(id_pagina)
        WHERE pagines.link_pagina = :l;
        ');
        $result->bindParam(':l', $link_pagina);
        $result->execute();
        $connexion = null;
        return $result->fetchAll(PDO::FETCH_CLASS, 'RCDE\PaginaSeccio');
    }
}
