<?php
namespace App;

class Autoload
{
    public static function autoload($classe)
    {
        $classe = str_replace(__NAMESPACE__ . '\\', '', $classe);
        $classe = str_replace('\\', '/', $classe);
        $fichier = __DIR__ . '/' . $classe . '.php';
        if (file_exists($fichier)) {
            require_once $fichier;
        }
    }
    public static function register()
    {
        spl_autoload_register([__CLASS__, 'autoload']);
    }
}
