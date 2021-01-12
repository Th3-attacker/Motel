<?php
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', __DIR__);
define('VIEWS', ROOT . DS . 'views');

$path = $_GET['page'] ?? 'home';

$map = [
	'home'       => [
		'_view' => VIEWS . DS . 'home.php'
		// '_controller' => 'HomeController@inddex'
	],
	'contact-us' => [
		'_view' => VIEWS . DS . 'contact-us.php'
		// '_controller' => 'ContactController'
	],
	'about-us'   => [
		'_view' => VIEWS . DS . 'about-us.php'
		// '_controller' => 'AboutController'
	],
	'room'       => [
		'_view' => VIEWS . DS . 'room.php'
		// '_controller' => 'RoomController'
	],
	'404'        => [
		'_view' => VIEWS . DS . '404.php'
		// '_controller' => 'RoomController'
	]
];

$defaultView       = $map['404']['_view'];
$defaultStatusCode = 404;

if (isset($map[$path])) {
	$defaultView       = $map[$path]['_view'];
	$defaultStatusCode = 200;
}

http_response_code($defaultStatusCode);
header('Content-type: text/html; charset=utf-8');
require_once $defaultView;
