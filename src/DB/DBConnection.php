<?php

namespace Transformers\DB;

// Singleton to connect DB.

class DbConnection
{
    // The one and only class instance.
    private static ?DbConnection $instance = null;

    private \PDO $pdo;

    private string $host = 'DB';
    private string $dbname = 'transformersdb';
    private string $user = 'root';
    private string $password = 'password';

    // The DB connection is established in the private constructor.
    private function __construct()
    {
        $dsn = 'mysql:host=' . $this->host . '; dbname=' . $this->dbname;
        $this->pdo = new \PDO($dsn, $this->user, $this->password);
        $this->pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public static function getInstance(): DbConnection
    {
        if (!self::$instance) {
            self::$instance = new DbConnection();
        }

        return self::$instance;
    }

    public function getConnection(): \PDO
    {
        return $this->pdo;
    }
}