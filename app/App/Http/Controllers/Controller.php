<?php
namespace App\Http\Controllers;

/**
 * All controllers should extend this class.
 */

/*
class Controller
{
    protected $container;
    public function __construct($container) {        
        $this->container = $container;
    }
}
*/

/*
class Controller
{
    protected $container;
    public function __construct($container) {        
        $this->container = $container;
    }
    public function __get($property) { // get() magic method
        if ($this->container->{$property}) {
            return $this->container->{$property};
        }
    }    
}
*/

class Controller
{
    protected $container;

    public function __construct($container) {        
        $this->container = $container;
    }

    public function __get($property) { // get() magic method
        if ($this->container->{$property}) {
            return $this->container->{$property};
        }
    }

    public function render($name, array $args = [])
    {
        return $this->view->render($this->response, $name . '.twig', $args);
    }    
}

/*
class Controller
{
    //protected $request, $response, $args, $container;
    protected $container;

    //public function __construct($request, $response, $args, $container) {
    public function __construct($container) {        
        //$this->request = $request;
        //$this->response = $response;
        //$this->args = $args;
        $this->container = $container;
        //echo '<pre>', var_dump($this->container), '</pre>';
        //die;
    }

    public function __get($property) { // get() magic method
        if ($this->container->{$property}) {
            return $this->container->{$property};
        }
    }    
}
*/
