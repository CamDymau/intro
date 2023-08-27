<?php
// php -d extension=pgsql -d extension=pdo_pgsql vendor/bin/phinx migrate
// php -d extension=pgsql -d extension=pdo_pgsql vendor/bin/phinx seed:run -s Users -s Friends -s Messages -s TextMessages -s News -s Comments
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
