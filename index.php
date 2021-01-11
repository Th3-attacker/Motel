<?php
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', __DIR__);
define('VIEWS', ROOT . DS . 'views');

$path = $_GET['page'] ?? 'home';

$map = [
    'home' => [
        '_view' => VIEWS . DS . 'home.php',
        // '_controller' => 'HomeController'
    ],
    'contact-us' => [
        '_view' => VIEWS . DS . 'contact-us.php',
        // '_controller' => 'ContactController'
    ],
    'about-us' => [
        '_view' => VIEWS . DS . 'about-us.php',
        // '_controller' => 'AboutController'
    ],
    'room' => [
        '_view' => VIEWS . DS . 'room.php',
        // '_controller' => 'RoomController'
    ],
];
if (isset($map[$path])) {
    require_once $map[$path]['_view'];
} else {
    echo 'Page introuvable';
}
