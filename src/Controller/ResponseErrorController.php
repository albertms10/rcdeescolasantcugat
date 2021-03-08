<?php

namespace RCDE\Controller;

use RCDE\Model\ResponseError;
use RCDE\Config\Connexion;

require_once __DIR__ . '/../Config/Connexion.php';
require_once __DIR__ . '/../Model/ResponseError.php';

class ResponseErrorController
{
    public static function postResponseError(
        ResponseError $response_error,
        string $locale,
        ?string $url = null,
        ?string $remote_addr = null,
        ?string $http_client_ip = null,
        ?string $http_x_forwarded_for = null,
    ): int
    {
        $connexion = new Connexion();

        $url ??= $_SERVER['REQUEST_URI'];
        $remote_addr ??= $_SERVER['REMOTE_ADDR'];
        $http_client_ip ??= array_key_exists('HTTP_CLIENT_IP', $_SERVER)
            ? $_SERVER['HTTP_CLIENT_IP']
            : null;
        $http_x_forwarded_for ??= array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)
            ? $_SERVER['HTTP_X_FORWARDED_FOR']
            : null;

        $reason = null;
        $description = null;
        if (!$response_error->known) {
            $reason = $response_error->reason;
            $description = $response_error->description;
        }

        $query = file_get_contents(__DIR__ . '/../Queries/insert__response_error.sql');
        $result = $connexion->prepare($query);
        $result->bindParam(':c', $response_error->code);
        $result->bindParam(':r', $reason);
        $result->bindParam(':d', $description);
        $result->bindParam(':u', $url);
        $result->bindParam(':l', $locale);
        $result->bindParam(':a', $remote_addr);
        $result->bindParam(':h_cip', $http_client_ip);
        $result->bindParam(':h_fwd', $http_x_forwarded_for);
        $result->execute();

        $connexion = null;
        return $result->rowCount();
    }
}
