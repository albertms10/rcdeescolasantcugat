<?php

namespace RCDE;

use Connexion;

require_once dirname(__FILE__) . "/../../config/Connexion.php";

class Navegacio
{
    public static function llistaPagines(): array
    {
        $connexion = new Connexion();
        $result = $connexion->prepare("SELECT * FROM pagines WHERE titol_pagina <> '__index__';");
        $result->execute();
        $connexion = null;
        return $result->fetchAll();
    }

    public static function llistaPaginesSeccions(string $link_pagina): array
    {
        $connexion = new Connexion();
        $result = $connexion->prepare("
        SELECT titol_pagina_seccio, link_pagina_seccio, hidden
        FROM pagines_seccions
           INNER JOIN pagines USING(id_pagina)
        WHERE pagines.link_pagina = :l;
        ");
        $result->bindParam(":l", $link_pagina);
        $result->execute();
        $connexion = null;
        return $result->fetchAll();
    }

    public static function titolPagina(string $link_pagina)
    {
        $connexion = new Connexion();
        $result = $connexion->prepare("SELECT titol_pagina FROM pagines WHERE link_pagina = :l;");
        $result->bindParam(":l", $link_pagina);
        $result->execute();
        $connexion = null;
        return $result->fetchColumn();
    }
}
