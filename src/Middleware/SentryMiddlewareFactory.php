<?php

declare(strict_types=1);

namespace MarcoPollacci\SentryExpressive\Middleware;

use Psr\Container\ContainerInterface;

class SentryMiddlewareFactory
{
    public function __invoke(ContainerInterface $container) : SentryMiddleware
    {
        return new SentryMiddleware();
    }
}
