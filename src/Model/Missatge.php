<?php

namespace RCDE;

use Connexion;

require_once __DIR__ . '/../../config/Connexion.php';

class Missatge
{
    public static function postMissatge(string $nom, string $email, string $missatge)
    {
        $connexion = new Connexion();
        $result = $connexion->prepare('
        INSERT INTO missatges (nom, email, missatge)
        VALUES (:n, :e, :m);
        ');
        $result->bindParam(':n', $nom);
        $result->bindParam(':e', $email);
        $result->bindParam(':m', $missatge);
        $result->execute();
        $connexion = null;
    }
}
