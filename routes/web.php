<?php

/*
$app->get('/', function($request, $response) {
    return 'Home';  
});
*/

/*
$app->get('/home', function($request, $response) {
    return;
});
*/

$app->get('/', function($request, $response) {
    //return 'Homepage';
    //echo(1/0);
    return $this->view->render($response, 'home.twig');
});
