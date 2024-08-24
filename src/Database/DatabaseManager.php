<?php

declare(strict_types=1);

namespace App\Database;

class DatabaseManager
{
    private \PDO $connection;

    public function __construct()
    {
        $this->connection = new \PDO('mysql:host=pure-php-mysql;dbname=db_name', 'user', 'password');
    }

    public function getConnection(): \PDO
    {
        return $this->connection;
    }
}
