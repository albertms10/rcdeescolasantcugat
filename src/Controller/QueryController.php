<?php

namespace RCDE\Controller;

use PDO;
use PDOStatement;
use RCDE\Config\Connexion;

require_once $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';

/**
 * @template T
 */
abstract class QueryController
{
    /**
     * @param string $queryName
     * @param class-string<T> $instanceName
     * @param string[] $params
     * @return T[]
     */
    protected static function queryAll(string $queryName, string $instanceName, array $params = []): array
    {
        $result = self::query($queryName, $params);
        return $result->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, $instanceName);
    }

    /**
     * @param string $queryName
     * @param string[] $params
     * @return T[]
     */
    private static function query(string $queryName, array $params = []): PDOStatement|array
    {
        $connexion = new Connexion();

        $filename = __DIR__ . "/../Queries/$queryName.sql";
        if (!file_exists($filename)) return [];

        $query = file_get_contents($filename);
        $result = $connexion->prepare($query);

        if (!$result) return [];

        foreach ($params as $key => &$param) {
            $result->bindParam($key, $param);
        }

        $result->execute();
        $connexion = null;
        return $result;
    }

    /**
     * @param string $queryName
     * @param string[] $params
     * @return int
     */
    protected static function post(string $queryName, array $params): int
    {
        $result = self::query($queryName, $params);
        return $result->rowCount();
    }
}
