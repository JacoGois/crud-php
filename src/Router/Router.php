<?php

declare(strict_types=1);

namespace App\Router;

use App\Database\DatabaseManager;

class Router
{
    private array $routes;

    public function __construct()
    {
        $this->routes = include "../routes.php";
    }

    public function getRoute() {
        $url = explode('?', $_SERVER['REQUEST_URI'])[0];

        if (false === isset($this->routes[$url])) {
            header('location: /erro-404');
            return;
        }

        $dbManager = new DatabaseManager();

        list($controller, $method) = $this->routes[$url];

        return (new $controller($dbManager))->$method();
    }
}