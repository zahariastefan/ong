<?php

namespace ContainerHg5y3As;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OC2AG_KService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.OC2AG.K' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.OC2AG.K'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'logger' => ['privates', 'logger', 'getLoggerService', false],
        ], [
            'logger' => '?',
        ]);
    }
}
