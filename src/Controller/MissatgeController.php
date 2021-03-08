<?php

namespace RCDE\Controller;

use RCDE\Config\Connexion;

require_once $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';

class MissatgeController
{
    public static function postMissatge(string $nom, string $email, string $missatge): int
    {
        $connexion = new Connexion();

        $query = file_get_contents(__DIR__ . '/../Queries/insert__missatge.sql');
        $result = $connexion->prepare($query);
        $result->bindParam(':n', $nom);
        $result->bindParam(':e', $email);
        $result->bindParam(':m', $missatge);
        $result->execute();

        $connexion = null;
        return $result->rowCount();
    }
}
