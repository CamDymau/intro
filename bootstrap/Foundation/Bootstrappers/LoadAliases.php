<?php

namespace Boot\Foundation\Bootstrappers;

final class LoadAliases extends Bootstrapper
{
    public function boot()
    {
        $aliases = config('app.aliases');
        array_walk($aliases, fn($key, $val) => class_alias($key, $val));
    }
}
