<?php
return [
    'providers' => [
        \App\Providers\RouteServiceProvider::class,
        \App\Providers\BladeServiceProvider::class,
    ],
    'aliases' => [
        'DB' => \Illuminate\Database\Capsule\Manager::class,
    ]
];