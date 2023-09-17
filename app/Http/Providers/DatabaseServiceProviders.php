<?php

namespace App\Http\Providers;

use Illuminate\Database\Capsule\Manager as Capsule;

final class DatabaseServiceProviders extends ServiceProvider
{
    public function register()
    {
        $default = config('database.default');
        $connections = config('database.connections');

        $capsule = new Capsule;
        $capsule->addConnection(data_get($connections, $default));
        $capsule->setAsGlobal();
        $capsule->bootEloquent();

        $this->bind(Capsule::class, fn () => $capsule);
    }

    public function boot()
    {
        //
    }
}
