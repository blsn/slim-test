<?php

session_start(); // set session

use Dotenv\Dotenv;
use App\App;
use Slim\Container;

define('INC_ROOT', __DIR__);

require INC_ROOT . '/../vendor/autoload.php'; // upload dependencies

if(file_exists(__DIR__ . '/../.env')) {
    $env = new Dotenv(__DIR__ . '/../');
    $env->load();
}

$app = new App(new Container(
    include INC_ROOT . '/container.php'
));

$container = $app->getContainer();

/*
$app = new Slim\App(); // slim instance

$app = new \Slim\App([
  	'settings' => [
        'displayErrorDetails' => true,
    ]
]);

$app->get('/', function($request, $response) {
    return 'Home';  
});
*/

/*
$user = new \App\App;
Var_dump($user);
die();
*/

require INC_ROOT . '/../routes/web.php';
