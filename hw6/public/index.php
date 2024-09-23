<?php

use Iplague\Project\Database;
use FastRoute\RouteCollector;
use function FastRoute\simpleDispatcher;

session_start();
$_SESSION['user_id'] = 1;

require __DIR__ . '/../vendor/autoload.php';

$db = new Database();


$dispatcher = simpleDispatcher(function(RouteCollector $r) {
    $homeController = new Iplague\Project\Controllers\HomeController();
    $aboutController = new Iplague\Project\Controllers\AboutController();
    $contactsController = new Iplague\Project\Controllers\ContactsController();

    $authMiddleware = new \Iplague\Project\AuthMiddleware();

    $r->addRoute('GET', '/', [$homeController, 'index']);
    $r->addRoute('GET', '/home', [$homeController, 'index']);
    $r->addRoute('GET', '/about', [$aboutController, 'index']);

    $r->addRoute('GET', '/contacts', function ($vars) use ($authMiddleware, $contactsController) {
        return $authMiddleware->handle([$contactsController, 'index'], $vars);
    });

    $r->addRoute('POST', '/',[$homeController, 'handleForm']);
    $r->addRoute('GET', '/home/delete', [$homeController, 'handleFormDelete']);
});

$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        header('Location: /');
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        header('Location: /');
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        if (is_callable($handler)) {
            call_user_func($handler, $vars);
        } else {
            $handler->handle($handler, $vars);
        }
        break;
}
