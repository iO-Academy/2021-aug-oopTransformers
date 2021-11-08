<?php

namespace Transformers\DB;

// Singleton to connect DB.

class DbConnection
{
    // The one and only class instance.
    private static $instance = null;

    private \PDO $pdo;

    private $host = 'DB';
    private $dbname = 'transformersdb';
    private $user = 'root';
    private $password = 'password';

    // The DB connection is established in the private constructor.
    private function __construct()
    {
        $dsn = 'mysql:host=' . $this->host . '; dbname=' . $this->dbname;
        $this->pdo = new \PDO($dsn, $this->user, $this->password);
        $this->pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new DbConnection();
        }

        return self::$instance;
    }

    public function getConnection()
    {
        return $this->pdo;
    }
}