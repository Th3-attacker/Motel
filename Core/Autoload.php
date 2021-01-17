<?php

namespace MamadouAlySy;

class Autoloader
{
    public static function register()
    {
        spl_autoload_register([__CLASS__, 'autoload']);
    }

    public static function autoload(string $className)
    {
        $className = str_replace(__NAMESPACE__ . '\\', '', $className);
        $className = str_replace('\\', DS, $className);

        require_once ROOT . DS . $className . '.php';
    }
}
