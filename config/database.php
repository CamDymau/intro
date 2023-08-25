<?php

return [
    'default' => 'postgresql',

    'connections' => [
        'postgresql' => [
            'driver' => 'postgresql',
            'url' => getenv('PG_URL'),
            'host' => getenv('PG_HOST'),
            'port' => getenv('PG_PORT'),
            'database' => getenv('PG_DATABASE'),
            'username' => getenv('PG_USERNAME'),
            'password' => getenv('PG_PASSWORD'),
        ],
    ],
];
