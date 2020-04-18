<?php

namespace App\Core;

use Medoo\Medoo;

class Database
{
    private $connection;

    public static $instance = null;

    public function __construct()
    {
        if (self::$instance === null) {
            self::$instance = $this;
        }

        $this->connection = new Medoo([
            'database_type' => 'mysql',
            'database_name' => 'webapp',
            'server' => 'localhost',
            'username' => 'janisozolkaja',
            'password' => 'default555'
        ]);
    }

    public static function getInstance(): self
    {
        return self::$instance ?? new Database();
    }

    public function connection()
    {
        return $this->connection;
    }
}