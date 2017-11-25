<?php
return [
    'settings' => [
        'displayErrorDetails' => true,
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
];
