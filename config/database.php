<?php
return [
    'database' => [
        'driver'    => env('DB_CONNECTION'),
        'host'      => env('DB_HOST'),
        'port'      => env('DB_PORT'),
        'username'  => env('DB_USERNAME'),
        'password'  => env('DB_PASSWORD'),
        'database'  => env('DB_DATABASE'),
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
    ]
];