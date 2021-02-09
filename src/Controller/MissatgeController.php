<?php

namespace RCDE;

use Connexion;

require_once __DIR__ . '/../../config/Connexion.php';

class MissatgeController
{
    public static function postMissatge(string $nom, string $email, string $missatge)
    {
        $connexion = new Connexion();

        $query = file_get_contents(__DIR__ . '/../Queries/insert__missatge.sql');
        $result = $connexion->prepare($query);
        $result->bindParam(':n', $nom);
        $result->bindParam(':e', $email);
        $result->bindParam(':m', $missatge);
        $result->execute();

        $connexion = null;
    }
}
