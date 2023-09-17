<?php

namespace App\Http\Providers;

use Dotenv\Dotenv;
use Dotenv\Exception\InvalidPathException;

final class EnvironmentServiceProvider extends ServiceProvider
{
    public function register()
    {
        try {
            $env = Dotenv::createImmutable(base_path());
            $env->load();
        } catch (InvalidPathException $e) {}
    }

    public function boot()
    {
        //
    }
}
