<?php

namespace App\Core;

use PDO;
use PDOException;

class Database
{
    protected static $dsn;
    protected static $username;
    protected static $password;
    protected static $pdo;

    public function __construct(array $credentials)
    {
        static::$dsn = $credentials['dsn'];
        static::$username = $credentials['username'];
        static::$password = $credentials['password'];
        static::$pdo = null;
    }

    public static function open()
    {
        if (static::$pdo === null) {
            try {
                static::$pdo = new PDO(
                    static::$dsn,
                    static::$username,
                    static::$password,
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                    ]
                );
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        return static::$pdo;
    }

    public static function close()
    {
        static::$pdo = null;

        return static::$pdo;
    }
}
