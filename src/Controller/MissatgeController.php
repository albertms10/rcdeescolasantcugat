<?php

namespace RCDE\Controller;

require_once $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';

class MissatgeController extends QueryController
{
    public static function postMissatge(string $nom, string $email, string $missatge): int
    {
        return self::post('insert__missatge', [
            ':n' => $nom,
            ':e' => $email,
            ':m' => $missatge,
        ]);
    }
}
