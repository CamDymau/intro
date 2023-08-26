<?php

return [
    'default' => 'postgresql',

    'connections' => [
        'postgresql' => [
            'driver' => 'pgsql',
            'url' => env('PG_DB_URL'),
            'host' => env('PG_DB_HOST'),
            'port' => env('PG_DB_PORT'),
            'database' => env('PG_DB_DATABASE'),
            'username' => env('PG_DB_USERNAME'),
            'password' => env('PG_DB_PASSWORD'),
            'prefix' => '',
        ],
    ],
];
