<?php

use Arrilot\DotEnv\DotEnv;

require_once ROOT . '/../vendor/DotEnv/DotEnv.php';
require_once ROOT . '/../vendor/DotEnv/Exceptions/MissingVariableException.php';

DotEnv::load(__DIR__ . '/../.env.php');
DotEnv::setRequired(['DB_NAME', 'DB_USERNAME', 'DB_PASSWORD']);

class Connexion extends PDO
{
    private string $server_name;
    private string $db_name;
    private string $db_username;
    private string $db_password;

    public function __construct()
    {
        $this->server_name = DotEnv::get('SERVER_NAME', 'localhost');
        $this->db_name = DotEnv::get('DB_NAME');
        $this->db_username = DotEnv::get('DB_USERNAME');
        $this->db_password = DotEnv::get('DB_PASSWORD');

        try {
            parent::__construct(
                "mysql:host=$this->server_name; dbname=$this->db_name",
                $this->db_username,
                $this->db_password,
                [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]
            );
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit;
        }
    }
}
