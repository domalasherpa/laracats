<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    $folder.'/' => 'Controllers/i.php',
    $folder.'/about' => 'Controllers/about.php',
    $folder.'/contact' => 'Controllers/contact.php'
];



function abort($code = 404){
    http_response_code($code);
    require "views/${code}.php";
    die();
}

function routeToController($uri, $routes){
    if(array_key_exists($uri, $routes)){
        require $routes[$uri];
    }
    else{
        abort();
    } 
}

routeToController($uri, $routes);