<?php

declare(strict_types=1);

namespace MarcoPollacci\SentryExpressive\Middleware;

use Throwable;

class SentryMiddleware
{
    public function __invoke(Throwable $error): void
    {
        \Sentry\captureException($error);
    }
}
