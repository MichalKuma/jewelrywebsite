<?php

namespace Core;

use App\TestClass;


class Router
{
    private $routes = [];

    // Add a new route to the router
    public function addRoute($url, $controller, $method)
    {
        $this->routes[$url] = ['controller' => $controller, 'method' => $method];
    }

    // Processing actual URL and calling out the Controller
    public function dispatch($url)
    {
        // Open existing route for URL
        if (array_key_exists($url, $this->routes)) {
            $route = $this->routes[$url];

            // Get a Name of Controller
            $controllerName = $route['controller'];
            $methodName = $route['method'];

            // Create Controller
            $controller = new $controllerName();

            $controller = new TestClass();
            $controller->index();            

            $controller->$methodName();
        } else {
            echo "404 Not Found";
        }
    }
}
