<?php
use Core\Router;

$router = new Router();

// Path
$router->addRoute("/projectjewellery/", 'App\TestClass', 'index');
$router->get("/projectjewellery/index/", HomeController, 'index');


// Find out where
$currentUrl = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$currentUrl = parse_url($currentUrl)['path'];

// Find
$router->dispatch($currentUrl);