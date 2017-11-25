<?php

session_start(); // set session

//use App\App;
//use Slim\Container;

define('INC_ROOT', __DIR__);

require INC_ROOT . '/../vendor/autoload.php'; // upload dependencies

/*
$app = new App(new Container(
    include INC_ROOT . '/container.php'
));

$container = $app->getContainer();
*/

/**/
$app = new Slim\App(); // slim instance

$app = new \Slim\App([
  	'settings' => [
        'displayErrorDetails' => true,
    ]
]);

$app->get('/', function($request, $response) {
    return 'Home';  
});

//require INC_ROOT . '/../routes/web.php';
