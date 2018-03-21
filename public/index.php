<?php

use App\controllers\DefaultController;
use Core\Env;
use Core\Router;

require __DIR__ . '/../vendor/autoload.php';

try {
    Env::load();
} catch (Exception $e) {
    echo $e->getMessage();
}

$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {
    $r->get('/', DefaultController::class.':index');
    $r->get('/wopr[/{name}]', DefaultController::class.':wopr');
});

$router = new Router($dispatcher);

$router->dispatch();