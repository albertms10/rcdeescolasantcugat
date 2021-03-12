<?php

namespace RCDE\Controller;

use PDO;
use PDOStatement;
use RCDE\Config\Connexion;

require_once $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';

abstract class QueryController
{
    protected static function queryAll(string $queryName, string $instanceName, array $params = []): array
    {
        $result = self::query($queryName, $params);
        return $result->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, $instanceName);
    }

    private static function query(string $queryName, array $params = []): false|PDOStatement
    {
        $connexion = new Connexion();

        $filename = __DIR__ . "/../Queries/$queryName.sql";
        if (!file_exists($filename)) return false;

        $query = file_get_contents($filename);
        $result = $connexion->prepare($query);

        foreach ($params as $key => &$param) {
            $result->bindParam($key, $param);
        }

        $result->execute();
        $connexion = null;
        return $result;
    }

    protected static function post(string $queryName, array $params): int
    {
        $result = self::query($queryName, $params);
        return $result->rowCount();
    }
}
