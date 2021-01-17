<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', __DIR__);
define('VIEWS', ROOT . DS . 'views');
require_once ROOT . DS . 'Core' . DS . 'Autoload.php';
// require_once ROOT . DS . 'database' . DS . 'Database.php';

\MamadouAlySy\Autoloader::register();

$credentials = require_once ROOT . DS . 'config' . DS . 'database.php';
new \MamadouAlySy\Core\Database($credentials);

$path = $_GET['page'] ?? 'home';

$map = require_once ROOT . DS . 'routes.php';

$defaultView       = $map['404']['_view'];
$defaultStatusCode = 404;

if (isset($map[$path])) {
    $defaultView       = $map[$path]['_view'];
    $defaultStatusCode = 200;
}

http_response_code($defaultStatusCode);
header('Content-type: text/html; charset=utf-8');
require_once $defaultView;
