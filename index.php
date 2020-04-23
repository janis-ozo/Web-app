<?php

require_once __DIR__ . '/vendor/autoload.php';

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $router) {
    // Countries
    $router->addRoute('GET', '/', 'CountriesController@index');
    $router->addRoute('GET', '/countries', 'CountriesController@index');
    $router->addRoute('GET', '/countries/{id:\d+}', 'CountriesController@show');
    $router->addRoute('GET', '/countries/create', 'CountriesController@create');
    $router->addRoute('POST', '/countries', 'CountriesController@store');
    $router->addRoute('POST', '/countries/{id:\d+}/delete', 'CountriesController@delete');

    // Cities
    $router->addRoute('GET', '/cities/create', 'CitiesController@create');
    $router->addRoute('POST', '/cities', 'CitiesController@store');
    $router->addRoute('POST', '/countries/{countryId:\d+}/cities/{cityId:\d+}/delete', 'CitiesController@delete');
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // ... 404 Not Found
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $params = $routeInfo[2];

        [$controller, $method] = explode('@', $handler);

        $controllerPath = '\App\Controllers\\' . $controller;
        echo (new $controllerPath)->{$method}($params);

        break;
}