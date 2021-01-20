<?php

namespace App\Core;

abstract class Controller
{
    public function render(string $view, array $data = [])
    {
        ob_start();
        extract($data);
        require_once VIEWS . DS . $view . '.php';
        http_response_code($defaultStatusCode);
        header('Content-type: text/html; charset=utf-8');
        echo ob_get_clean();
        exit;
    }
}
