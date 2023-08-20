<?php

namespace App\Support;

use Jenssegers\Blade\Blade;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ResponseFactoryInterface;

final class View
{
    /** @var Blade */
    protected Blade $blade;
    /** @var ResponseInterface */
    protected ResponseInterface $response;

    /**
     * @param ResponseFactoryInterface $factory
     */
    public function __construct(ResponseFactoryInterface $factory)
    {
        $this->response = $factory->createResponse(200, 'Success');
    }

    /**
     * @param string $template
     * @param array $with
     * @return ResponseInterface
     */
    public function __invoke(string $template = '', array $with = []): ResponseInterface
    {

        $cache = config('blade.cache');
        $views = config('blade.views');

        $blade = (new Blade($views, $cache))->make($template, $with);

        $this->response->getBody()->write($blade->render());

        return $this->response;
    }
}
