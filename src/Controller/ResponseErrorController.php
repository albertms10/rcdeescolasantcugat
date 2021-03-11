<?php

namespace RCDE\Controller;

use RCDE\Model\ResponseError;

require_once $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';

class ResponseErrorController extends QueryController
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

        return self::post('insert__response_error', [
            ':c' => $response_error->code,
            ':r' => $reason,
            ':d' => $description,
            ':u' => $url,
            ':l' => $locale,
            ':a' => $remote_addr,
            ':h_cip' => $http_client_ip,
            ':h_fwd' => $http_x_forwarded_for,
        ]);
    }
}
