<?php

use Src\pages\api\v1\Error404Controller;

require_once __DIR__ . '/../vendor/autoload.php';

$routes = require_once __DIR__ . '/../configs/routes.php';

$pathInfo = $_SERVER['PATH_INFO'] ?? '/';
$httpMethod = $_SERVER['REQUEST_METHOD'];

$key = "$httpMethod|$pathInfo";

if (array_key_exists($key, $routes)) {
    $controllerClass = $routes["$httpMethod|$pathInfo"];

    $controller = new $controllerClass();
} else {
    $controller = new Error404Controller();
}
/** @var Controller $controller */
$controller->request();
