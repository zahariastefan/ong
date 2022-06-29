<?php

namespace ContainerDYkyW9C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TC3ccService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.t_C_3cc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.t_C_3cc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'question' => ['privates', '.errored..service_locator.t_C_3cc.App\\Entity\\Question', NULL, 'Cannot autowire service ".service_locator.t_C_3cc": it references class "App\\Entity\\Question" but no such service exists.'],
        ], [
            'question' => 'App\\Entity\\Question',
        ]);
    }
}
