<?php

namespace Boot\Foundation\Bootstrappers;

use App\Providers\ServiceProvider;

final class LoadServiceProviders extends Bootstrapper
{
    public function boot()
    {
        ServiceProvider::setup($this->app, config('app.providers'));
    }
}
