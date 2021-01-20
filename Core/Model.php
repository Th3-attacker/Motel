<?php

namespace App\Core;

abstract class Model
{
    protected static $connection;
    protected static $table;
    public static function all()
    {
        static::$connection = Database::open();
        $query = static::$connection->query('SELECT * FROM ' . static::$table);
        $query->execute();
        static::$connection = Database::close();

        return $query->fetchAll();
    }
}
