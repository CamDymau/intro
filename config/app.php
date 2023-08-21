<?php
return [
    'providers' => [
        /* Booted Foundation Service Providers...  */
//        \Boot\Foundation\Providers\FileSystemServiceProvider::class,
//        \Boot\Foundation\Providers\TranslatorServiceProvider::class,
//        \Boot\Foundation\Providers\ValidatorServiceProvider::class,

        /* App Service Providers... */
        \App\Providers\RouteServiceProvider::class,
        \App\Providers\ErrorMiddlewareServiceProvider::class,
        \App\Providers\BladeServiceProvider::class,
//        \App\Providers\DatabaseServiceProvider::class,
    ],
];