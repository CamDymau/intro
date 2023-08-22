<?php

namespace App\Http;

use Boot\Foundation\HttpKernel as Kernel;
class HttpKernel extends Kernel
{
    /** @var array */
    public array $middleware = [];
    /** @var array  */
    public array $middlewareGroups = [
        'api' => [],
        'web' => []
    ];
}
