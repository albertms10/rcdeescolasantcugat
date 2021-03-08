<?php

namespace RCDE\Config;

use Arrilot\DotEnv\DotEnv;
use PDO;
use PDOException;

require_once $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';

DotEnv::load(__DIR__ . '/../../.env.php');
DotEnv::setRequired(['DB_NAME', 'DB_USERNAME', 'DB_PASSWORD']);

class Connexion extends PDO
{
    private string $serverName;
    private string $dbName;
    private string $dbUsername;
    private string $dbPassword;

    public function __construct()
    {
        $this->serverName = DotEnv::get('SERVER_NAME', 'localhost');
        $this->dbName = DotEnv::get('DB_NAME');
        $this->dbUsername = DotEnv::get('DB_USERNAME');
        $this->dbPassword = DotEnv::get('DB_PASSWORD');

        try {
            parent::__construct(
                "mysql:host=$this->serverName; dbname=$this->dbName",
                $this->dbUsername,
                $this->dbPassword,
                [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']
            );
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit;
        }
    }
}
