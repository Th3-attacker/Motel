<?php

namespace App;

class Autoload
{
	/**
	 * @param $classe
	 */
	public static function autoload($classe)
	{
		// replacer le namespace de Autoloader dans le nom de la class passe par ''
		$classe = str_replace(__NAMESPACE__ . '\\', '', $classe);
		// replacer le antislache par slache
		$classe = str_replace('\\', '/', $classe);

		$fichier = __DIR__ . '/' . $classe . '.php';

		if (file_exists($fichier)) {
			require_once $fichier;
		}

	}

	public static function register()
	{

// appel la fonction autoload qui est dans cette class
		// et passe lui le nom complet de la class (namespace + nom_de_la_class)
		spl_autoload_register([__CLASS__, 'autoload']);
	}

}
