<?php
return [
    'settings' => [
        //'displayErrorDetails' => false,
        'displayErrorDetails' => getenv('APP_ENV') === "production" ? false : true,
    ],

    'view' => function($c) {
        $view = new \Slim\Views\Twig(__dir__ . '/../resources/views', [
            'debug' => true
        ]);
        $view->addExtension(new \Slim\Views\TwigExtension(
            $c->router,
            $c->request->getUri()
        ));
        return $view;
    },

    /*
    'HomeController' => function($c) { 
        return new App\Http\Controllers\HomeController;
    }
    */

    /*
    'HomeController' => function($c) { 
        return new App\Http\Controllers\HomeController($c->view);
    }
    */
    
    /*
    'HomeController' => function($c) { 
        return new App\Http\Controllers\HomeController($c);
    },
    */

    'db' => function($c) {
        $capsule = new \Illuminate\Database\Capsule\Manager;
        $capsule->addConnection($c['config']->get('database'), 'default');
        $capsule->setAsGlobal(); 
        return $capsule;
    },
        
];
