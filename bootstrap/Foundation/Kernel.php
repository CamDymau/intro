<?php

namespace Boot\Foundation;

use Slim\App;

abstract class Kernel
{
    /** @var App */
    public App $app;

    /** @var array */
    public array $bootstrap = [];

    /**
     * @param App $app
     */
    public function __construct(App &$app)
    {
        $this->app = $app;
        $this->app->getContainer()->set(self::class, $this);
        Bootstrappers\Bootstrapper::setup($this->app, $this->bootstrap);
    }

    /**
     * @param App $app
     * @return static
     */
    public static function bootstrap(App &$app)
    {
        return new static($app);
    }

    /**
     * @return App
     */
    public function getApp(): App
    {
        return $this->app;
    }
}
