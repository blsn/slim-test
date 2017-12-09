<?php

namespace App\Http\Controllers;

/*
class HomeController
{
    public function index($request, $response) {
        return 'Home Controller';        
    }
}
*/

/*
use Slim\Views\Twig as View;

class HomeController 
{
    protected $view;

    public function __construct(View $view) {
        $this->view = $view;
    }

    public function index($request, $response) {
        return $this->view->render($response, 'home.twig');
    }
}
*/

/*
class HomeController extends Controller
{
    public function index($request, $response, $args) {
        return $this->container->view->render($response, 'home.twig', $args);
    }
}
*/

/*
class HomeController extends Controller
{
    public function index($request, $response, $args) {
        return $this->view->render($response, 'home.twig', $args);
    }
}
*/

/*
class HomeController extends Controller
{
    public function index($request, $response, $args) {
        return $this->render('home');
    }
}
*/
/*
class HomeController extends Controller
{
    public function get() {
        return $this->render('home');
    }
}
*/

class HomeController extends Controller
{
    public function get() {
        $user = $this->db->table('users')->find(24); // test eloquent
        var_dump($user->email);
        //die();
        return $this->render('home');
    }
}
