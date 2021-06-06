<?php
require_once(dirname(__FILE__) . '/../src/config/config.php');

// urldecode — Decodifica uma URL codificada
$uri = urldecode(
    // parse_url — Interpreta uma URL e retorna os seus componentes
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

if($uri === '/' || $uri === '' || $uri === '/index.php') {
    $uri = '/login.php';
}

require_once(CONTROLLERS_PATH . "/{$uri}");