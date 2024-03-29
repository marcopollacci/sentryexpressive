<?php

declare(strict_types=1);

namespace MarcoPollacci\SentryExpressive;

use Zend\Stratigility\Middleware\ErrorHandler;
use MarcoPollacci\SentryExpressive\Delegators\SentryDelegator;

/**
 * The configuration provider for the MarcoPollacci Tipsandtrick module
 *
 * @see https://docs.zendframework.com/zend-component-installer/
 */
class ConfigProvider
{
    /**
     * Returns the configuration array
     *
     * To add a bit of a structure, each section is defined in a separate
     * method which returns an array with its configuration.
     */
    public function __invoke() : array
    {
        return [
            'dependencies' => $this->getDependencies(),
            'templates'    => $this->getTemplates(),
        ];
    }

    /**
     * Returns the container dependencies
     */
    public function getDependencies() : array
    {
        return [
            'invokables' => [
            ],
            'factories'  => [
                Middleware\SentryMiddleware::class => Middleware\SentryMiddlewareFactory::class
            ],
            'delegators' => [
                ErrorHandler::class => [
                    SentryDelegator::class
                ],
            ],
        ];
    }

    /**
     * Returns the templates configuration
     */
    public function getTemplates() : array
    {
        return [
            'paths' => [
            ],
        ];
    }
}
