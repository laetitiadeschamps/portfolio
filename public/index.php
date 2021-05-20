<?php 

require __DIR__ .'/../vendor/autoload.php';
session_start();
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
$router->map(
    'GET',
    '/parcours/',
    [
        'method'=>'parcours',
        'controller'=>'App\Controllers\MainController'
    ],
    'main-parcours'
);
$router->map(
    'GET',
    '/portfolio/',
    [
        'method'=>'portfolio',
        'controller'=>'App\Controllers\MainController'
    ],
    'main-portfolio'
);
$router->map(
    'GET',
    '/contact/',
    [
        'method'=>'contact',
        'controller'=>'App\Controllers\MainController'
    ],
    'main-contact'
);

// $class="work";
// $sitesWeb = [
// 'Securitous'=>[
//     'image_name'=>'securitous.jpg',
//     'badges'=>['HTML', 'CSS', 'Bootstrap', 'JS', 'PHP'],
//     'description'=> 'Site vitrine avec formulaire de contact',
//     'type'=>'vitrine_contact',
//     'url'=> 'https://securitous.fr'

// ],
// 'Puissance 4' => [
//     'image_name'=>'javascript.png',
//     'badges'=>['HTML', 'CSS', 'JS', 'PHP'],
//     'description'=> 'Mini-jeu 2 joueurs',
//     'type'=>'jeu',
//     'url'=>'#'
// ],

// 'Nouveau site' => [
//     'image_name'=>'ecommerce.jpg',
//     'badges'=>['HTML', 'CSS', 'PHP'], 
//     'description'=> 'A déterminer',
//     'type'=>'ecommerce',
//     'url'=>'#'
// ],
// 'Nouveau site 2' => [
//     'image_name'=>'php.png',
//     'badges'=>['HTML', 'CSS', 'PHP'], 
//     'description'=> 'A déterminer',
//     'type'=>'vitrine_contact',
//     'url'=>'#'
//     ]
// ];

// $badgeColors = [
//     'HTML' => '#0d5356',
//     'CSS' => '#82066d',
//     'Bootstrap' => '#886518',
//     'JS' => '#7598e8', 
//     'PHP' => '#e89075',
//     'POO'=>'#a72c2c'
// ];


// $badges = [
//     'HTML' => new Skills('HTML', '#0d5356', 80),
//     'CSS' => new Skills('CSS', '#82066d', 60),
//     'Bootstrap' => new Skills('Bootstrap', '#886518', 60),
//     'JS'=> new Skills('JS', '#7598e8', 80),
//     'PHP' => new Skills('PHP', '#e89075', 80),
//     'POO'=>new Skills('POO', '#a72c2c', 60)
// ];

// $langues = [
//     'Anglais' => new Skills('Anglais', '#0d5356', 95),
//     'Allemand' => new Skills('Allemand', '#82066d', 80),
//     'Espagnol' => new Skills('Espagnol', '#886518', 60),
//     'Turc'=> new Skills('Turc', '#7598e8', 20),
//     'Italien' => new Skills('Italien', '#e89075', 20),
   
// ];




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


 ?>