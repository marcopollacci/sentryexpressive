<?php

declare(strict_types=1);
/**
 * @copyright (c) 2006-2017 Stickee Technology Limited
 */

namespace MarcoPollacci\SentryExpressive\Delegators;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\DelegatorFactoryInterface;
use MarcoPollacci\SentryExpressive\Middleware\SentryMiddleware;

class SentryDelegator implements DelegatorFactoryInterface
{
    /**
     * A factory that creates delegates of a given service
     *
     * @param  ContainerInterface $container
     * @param  string $name
     * @param  callable $callback
     * @param  null|array $options
     *
     * @return \Zend\Stratigility\Middleware\ErrorHandler
     *
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function __invoke(ContainerInterface $container, $name, callable $callback, array $options = null)
    {

        $errorHandler = $callback();

        if(isset($container->get('config')['sentry'])){
            $sentry = $container->get('config')['sentry'];
            \Sentry\init($sentry);
    
            $listener = $container->get(SentryMiddleware::class);
            $errorHandler->attachListener($listener);

        }

         return $errorHandler;
    }
}
