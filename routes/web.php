<?php

/*
$app->get('/', function($request, $response) {
    return 'Home';  
});
*/

/*
$app->get('/', function($request, $response) {
    return $this->view->render($response, 'home.twig');
});
*/

//$app->get('/[{name}]', 'HomeController:index');

//$app->get('/[{name}]', 'App\Http\Controllers\HomeController:index');

$app->get('/[{name}]', 'App\Http\Controllers\HomeController:get');

//$app->route(['GET'], '/', App\Http\Controllers\HomeController::class)->setName('home');
