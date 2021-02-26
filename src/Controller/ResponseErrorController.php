<?php

namespace RCDE;

use Connexion;

require_once __DIR__ . '/../../config/Connexion.php';
require_once __DIR__ . '/../Model/ResponseError.php';

class ResponseErrorController
{
    public static function postResponseError(ResponseError $responseError, string $url, string $locale): int
    {
        $connexion = new Connexion();

        $query = file_get_contents(__DIR__ . '/../Queries/insert__response_error.sql');
        $result = $connexion->prepare($query);
        $result->bindParam(':c', $responseError->code);
        $result->bindParam(':r', $responseError->reason);
        $result->bindParam(':d', $responseError->description);
        $result->bindParam(':u', $url);
        $result->bindParam(':l', $locale);
        $result->execute();

        $connexion = null;
        return $result->rowCount();
    }
}
