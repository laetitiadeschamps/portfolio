<?php 

require __DIR__ .'/../vendor/autoload.php';
session_start();

// Creating dispatch logic
$router = new AltoRouter();
$router->setBasePath($_SERVER['BASE_URI']);

$router->map(
    'GET',
    '/',
    [
        'method'=>'home',
        'controller'=>'App\Controllers\MainController'
    ],
    'main-home'
);
$router->map(
    'POST',
    '/',
    [
        'method'=>'homeSubmit',
        'controller'=>'App\Controllers\MainController'
    ],
    'main-homeSubmit'
);

$match = $router->match();

if ($match !== false) {
    $routeData = $match['target'];
    $methodToCall = $routeData['method']; 
    $controllerToCall = $routeData['controller']; 
    $routeParams = $match['params'];
} else {  
    $methodToCall = 'page404';
    $controllerToCall = 'App\Controllers\MainController';
    $routeParams = [];
}
$controller = new $controllerToCall();
$controller->$methodToCall($routeParams);
