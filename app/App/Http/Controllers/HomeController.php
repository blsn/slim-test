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

/*
class HomeController extends Controller
{
    public function get() {
        $user = $this->db->table('users')->find(24); // test eloquent
        var_dump($user->email);
        //die();
        return $this->render('home');
    }
}
*/

/*
use App\Database\User; // test elequent with class User

class HomeController extends Controller
{
    public function get() {
        //$user = User::find(24);
        //var_dump($user);
        $user = User::where('email', 'blsn2000@gmail.com')->first();
        var_dump($user->email);
        return $this->render('home');
    }
}
*/

/*
use App\Database\User; // test elequent with class User

class HomeController extends Controller
{
    public function get() {
        User::create([ // test elequent with class User for create a user
            'name'      => 'Billy',
            'email'     => 'billy@codec.com',
            'password'  => '123',
        ]);
        return $this->render('home');
    }
}
*/

class HomeController extends Controller
{
    public function get() {
        return $this->render('home');
    }
}


