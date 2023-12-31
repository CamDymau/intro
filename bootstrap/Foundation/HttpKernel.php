<?php

namespace Boot\Foundation;

class HttpKernel extends Kernel
{
    /** @var array */
    public array $middleware = [];

    /**
     * @var array
     */
    public array $bootstrap = [
        Bootstrappers\LoadHttpMiddleware::class,
        Bootstrappers\LoadServiceProviders::class,
        Bootstrappers\LoadDebuggingPage::class,
    ];
}
