<?php

return [
    'paths' => [
        'migrations' => database_path('migrations'),
        'seeds' => database_path('seeders'),
    ],
    'environments' => [
        'default_migration_table' => 'main_scheme.phinxlog',
        'default_database' => 'maindb',
        'maindb' => [
            'adapter' => 'pgsql',
            'host' => 'localhost',
            'name' => 'maindb',
            'user' => 'docker_user',
            'pass' => 'docker_password',
            'port' => '5432',
            'charset' => 'utf8mb4',
        ],
    ],
];
