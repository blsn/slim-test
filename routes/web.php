<?php

/*
$app->get('/', function($request, $response) {
    return 'Home';  
});
*/

$app->get('/', function($request, $response) {
    return $this->view->render($response, 'home.twig');
});
