<?php
return [
    'providers' => [
        \App\Http\Providers\EnvironmentServiceProvider::class,
        \App\Http\Providers\RouteServiceProvider::class,
        \App\Http\Providers\BladeServiceProvider::class,
        \App\Http\Providers\DatabaseServiceProviders::class,
    ],
];