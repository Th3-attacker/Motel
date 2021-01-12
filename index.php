<?php
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', __DIR__);
define('VIEWS', ROOT . DS . 'views');

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
